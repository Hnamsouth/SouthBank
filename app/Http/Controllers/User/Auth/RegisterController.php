<?php

namespace App\Http\Controllers\User\Auth;

use App\Events\NewUserCreated;
use App\Http\Controllers\Controller;
use App\Models\Accounts;
use App\Models\AccountType;
use App\Models\BalanceCardAccount;
use App\Models\CardAccountSecret;
use App\Models\Cards;
use App\Models\User;
use App\Models\User_Info;
use App\Models\User_Secret;
use App\Models\UserCardAccount;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    use RegistersUsers;

//    protected $redirectTo='/login';
    //
    public function __construct()
    {
//        $this->middleware('guest');
    }
    public function showRegistrationForm($acc_type=null)
    {
        if($acc_type !== null){
            $account_type=AccountType::with('CardType.DebitCardType')->SearchByType($acc_type)->first();
//            dd($account_type->CardType[0]->DebitCardType->name);
            return view('auth.register_account',compact('account_type'));
        }
        return view('auth.register_account'); // goi dung route name da custom
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

//        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }


    protected function validator(array $data)
    {
//        dd($data);
        return Validator::make($data, [
            'phone' => ['required', 'numeric'],
            'username' => ['string','unique:users'],
            'CCCD' => ['required', 'string'],
            'CMND_CCCD_IMG_BEFORE' => ['required'],
            'CMND_CCCD_IMG_AFTER' =>  ['required'],
            'gender' =>  ['required'],
            'city' =>  ['required'],
            'district' =>  ['required'],
            'ward' =>  ['required'],
            'detail_address' =>  ['required'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'], //, 'unique:users'
            'secret_question' =>  ['required', 'string'],
            'name' =>  ['required', 'string'],
            'date_of_birth' =>  ['required', 'date'],
            'education_level' =>  ['required'],
            'nationality' =>  ['required', 'string'],
        ],[

        ]);
    }

    protected function create(array $data)
    {
//        dd($data);
//        create user
        $password=Str::random(8);

        $user= User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($password),
        ]);

//        create user info: nhận diện chữ trên ảnh CCCD bằng tesseract.js hiển thông tin trên CCCD ở form input
        User_Info::create([
            'name'=> $data['name'],
            'phone'=> $data['phone'],
            'date_of_birth'=> $data['date_of_birth'],
            'current_address'=> $data['city']."-".$data['district']."-".$data['ward']."-".$data['detail_address'],
            'education_level'=> $data['education_level'],
            'nationality'=> $data['nationality'],
            'user_id'=>$user->id,
        ]);

//        create account
            $account=Accounts::create([
                'account_number'=>$data['phone'],
                'status'=>true,
                'user_id'=>$user->id,
                'account_type_id'=>$data['account_type'],
            ]);
//        create card
            $CIF=random_int(10000000,99999999);
            $ACC=random_int(10,99);
            $card=Cards::create([
                'card_number'=>Cards::CTRY_CODE['MASTER'].Cards::BANK_CODE['MASTER'].$CIF.$ACC,
                'name'=>'HOANG VAN NAM',
                'expiration_date'=>date('Y-m-d'),
                'activation_date'=>date('Y-m-d'),
                'cvv'=>random_int(100,999),
                'status'=>true,
                'user_id'=>$user->id,
                'card_type_id'=>$data['card_type'],
            ]);
//        create user secret

            User_Secret::create([
                'CMND_CCCD'=>$data['CCCD'],
                //'old_CMND_CCCD',
                'secret_question'=>$data['CCCD'],
                //'selfie',
                'CMND_CCCD_IMG_BEFORE'=>$this->UploadCloudinary($data['CMND_CCCD_IMG_BEFORE'])->getPublicId(),
                'CMND_CCCD_IMG_AFTER'=>$this->UploadCloudinary($data['CMND_CCCD_IMG_AFTER'])->getPublicId(),
                //'relative_phone_1',
                //'relative_phone_2',
                //'salary',
                'user_id'=>$user->id,
            ]);

//        create card_account_secret
           CardAccountSecret::create([
              'PIN'=>random_int(1000,9999),
               'card_lock'=>false,
               'atm_pos_lock'=>false,
               'online_lock'=>false,
               'account_id'=>$account->id,
               'card_id'=>$card->id,
           ]);
//        create balance_card_account
            BalanceCardAccount::create([
                'balance'=>0,
                'account_id'=>$account->id,
                'card_id'=>$card->id,
            ]);
//        send notify to administrator  and card-acc info to user email
        $user['real_password']=$password;
        event(new NewUserCreated($user));
    }
    protected function registered(Request $request, $user)
    {
        return redirect()->route('login');
    }

    protected function UploadCloudinary($img){
        $image=base64_decode($img);

        $result=\cloudinary()->upload($img,['folder'=>'User/secret']);

        // get img \cloudinary()->getImage($publicId);
        return $result;
    }


    protected function checkRegister(Request $request){

        try {
            $p=$request->get('phone');
            $e=$request->get('email');
            $c=$request->get('CCCD');
            if($c!=null){
               $us= User_Secret::where('CMND_CCCD','=',$c)->first();
                return $us->user_id?0:1;
            }
            $user= User::where($p!=null?'username':'email','=',$p!=null?$p:$e)->first();
            return $user->id?0:1;
        }catch (Exception $e){}
        return 1;

    }

    protected function sendNotify(array $data){

    }

}
