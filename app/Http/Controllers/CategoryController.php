<?php

namespace App\Http\Controllers;

use App\Models\Old\Category;
use App\Models\Old\Order;
use App\Models\Old\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function dashboard(){
        $order_count=Order::count();
        $order_sum_grand_total=Order::sum('grand_total');
        $product_count=Product::count();
        $total_qty=DB::table('orders_products')->sum('qty');

        $category_data=Category::withCount('Products')->limit(6)->get();

        $category_name=[];
        $products_count=[];
        foreach ($category_data as $item){
            $category_name[]=$item->name;
            $products_count[]=$item->products_count;
        }
        $category_name=json_encode($category_name);
        $products_count=json_encode($products_count);
//        dd($chart);
        $today=today();

        $today_order=Order::whereDate('created_at',$today)->count();
        $productIds=DB::table("orders_products")
            ->groupBy('product_id')
            ->select(DB::raw('product_id,sum(qty) as totalQty'))
            ->orderBy('totalQty','desc')
            ->limit(5)
            ->get()
            ->pluck('totalQty') // chỉ lấy các cột cần thiết
            ->toArray();
//        DB::select('select product_id,sum(qty) as totalQty from orders_products group by product_id order by totalQty desc limit 5')
//         $asd=  DB::select('select * from products where id in (select product_id from orders_products group by product_id order by sum(qty) desc )');
//        $bestSeller=Product::whereIn('id','in',$productIds);


        return view('practice.dashboard',compact('category_name','products_count'));
    }
    public function getProducts2(Request $rq){
        $price=[10000,20000,30000,40000,50000,60000,70000,80000,90000,100000];
        $search=$rq->get('search');
        $category_id=$rq->get('category_id');

        $order_col=$rq->get('order_col')??"id";
        $sortBy=$rq->get('sortBy')??"desc";
//        if($search){
//            $data=Product::where('name','like','%$search%')->orderBy('id', 'asc')->paginate();
//        }else{
//            $data=Product::orderBy('id', 'asc')->paginate();
//        }
//        $data=Product::CategoryFilter($category_id)->Search($search)->orderBy('id', 'asc')->paginate();
        $data=Product::with('Category')->SearchAll($search,$category_id)->orderBy('id', 'asc')->paginate();
//        dd($data);

        $category=Category::all();

        return view('practice.product',[
            'data'=>$data,
            'category'=>$category,
            'price'=>$price
        ]);
    }

    //
    public function getProducts($id=null){
        if($id==null){
            $data=DB::table('products')->get();
            $data2=Product::all();
            $data23=Product::leftJoin('categories','categories.id','=','products.category_id')
                ->orderBy('id','desc')
                ->select(['products.*','categories.name as category_name'])->paginate();
//            $data24=Product::with('category_id')->paginate();
//            $data21=Product::withTrashed()->all();
//            $data22=Product::onlyTrashed();
            $data4=Product::orderBy('id', 'asc')->paginate();// danh sach co phan trang
//            $data3=Product::limit(30)->orderBy('id', 'asc')->get();
//            return view('practice.product')->with('data',$data);
//            return view('practice.product',compact('data'));
            $product=Product::all()->random(random_int(1,10));
//            dd($data4);
            $category=Category::all();
            return view('practice.product',[
                'data'=>$data4,
                'category'=>$category
            ]);
        }else{
            return Product::find($id);
        }
    }
    public function deleteProducts($id){
       return  Product::delete($id);
    }
    public function createProduct(){
        $category = Category::all();
        return view('practice.create_product',compact('category'));
    }

    public function addProduct(Request $rq){
        $rq->validate([
            'name'=>'required|string|min:6',
            'price'=>'required|numeric|min:0',
            'qty'=>'required|numeric|min:0',
            'thumbnail'=>'nullable|image|mimes:png,gif,jpeg,jpg',
        ],[
            'required'=>'vui long nhap thong tin',
            'numeric'=>'vui long nhap so',
            'min'=>'gia tri toi thieu cua :attribute la :min'
        ]);
        $data1=$rq->all();  // Lấy tất cả gia trị từ form
        $data=$rq->except('thumbnail'); // Lấy tất cả gia trị từ form trừ thumbnail

        try{
            if($rq->hasFile('thumbnail')){
                $file=$rq->file('thumbnail'); // request file nằm trên web server
                $filename=time().$file->getClientOriginalName();
                $path=public_path('uploads'); // lấy đường dẫn đến thư mục uploads
                $file->move($path,$filename); // di chuyển file vào thư mục uploads
                $data['thumbnail']='/uploads/'.$filename;

            }
        }catch (Exception $e){
        }finally{
            $data['thumbnail']=$data['thumbnail'] ?? null;
        }
        // upload file


        Product::create($data);
        return redirect()->to('/admin/create-product');
    }

    public function getCategory(){
//       $data= Category::paginate(15);
       $data= Category::all();
       return view('practice.category',['data'=>$data]);
    }

    public  function editProduct($id){
//        $data=Product::find($id);
//        if($data==null){
//            abort(404);
//        }

        $data=Product::findOrFail($id);

        $category = Category::all();
        return view('practice.edit_product',compact(['data','category']));
    }
    public  function editProduct2(Product $product){
        $data=$product;
        $category = Category::all();
        return view('practice.edit_product',compact('data','category'));
    }


    public function UpdateProduct(Product $product,Request $rq){
        $rq->validate([
            'name'=>'required|string|min:6',
            'price'=>'required|numeric|min:0',
            'qty'=>'required|numeric|min:0',
            'thumbnail'=>'nullable|image|mimes:png,gif,jpeg,jpg',
        ],[
            'required'=>'vui long nhap thong tin',
            'numeric'=>'vui long nhap so',
            'min'=>'gia tri toi thieu cua :attribute la :min'
        ]);
        $data=$rq->except('thumbnail'); // Lấy tất cả gia trị từ form trừ thumbnail

        try{
            if($rq->hasFile('thumbnail')){
                $pathOld= str_replace('/', trim(" \ ") ,public_path(Str::substr($product->thumbnail,1) ));
                File::delete($pathOld);
                // update img
                $file=$rq->file('thumbnail'); // request file nằm trên web server
                $filename=time().$file->getClientOriginalName();
                $path=public_path('uploads'); // lấy đường dẫn đến thư mục uploads
                $file->move($path,$filename); // di chuyển file vào thư mục uploads
                $data['thumbnail']='/uploads/'.$filename;
                // delete img

                Storage::delete(   str_replace(trim(' \ '), "/" ,public_path($product->thumbnail) ) );

            }
        }catch (Exception $e){
        }finally{
            $data['thumbnail']=$data['thumbnail'] ?? $product->thumbnail;
        }
        $product->update($data);
        return redirect()->to('/admin/list-product');
    }
    public function demoAddProduct(Request $rq){
        $rq->validate([
            'name'=>'required|string|min:6',
            'price'=>'required|numeric|min:0',
            'qty'=>'required|numeric|min:0',
            'thumbnail'=>'nullable|image|mimes:png,gif,jpeg,jpg',
        ],[
            'required'=>'vui long nhap thong tin',
            'numeric'=>'vui long nhap so',
            'min'=>'gia tri toi thieu cua :attribute la :min'
        ]);
//        $data1=$rq->all();  // Lấy tất cả gia trị từ form
        $data=$rq->except('thumbnail','_token'); // Lấy tất cả gia trị từ form trừ thumbnail

        try{
            if($rq->hasFile('thumbnail')){

                $file=$rq->file('thumbnail'); // request file nằm trên web server
                $filename=time().$file->getClientOriginalName();
                $path=public_path('uploads'); // lấy đường dẫn đến thư mục uploads
                $file->move($path,$filename); // di chuyển file vào thư mục uploads
                $data['thumbnail']='/uploads/'.$filename;

            }
        }catch (Exception $e){
        }finally{
            $data['thumbnail']=$data['thumbnail'] ?? null;
        }

        return Product::create($data);
//        return redirect()->to('/admin/list-product');
    }

    public function DemoDeleteP(){
//        $imagePath = public_path($data['thumbnail']);

// Delete the image file from the uploads folder
//        Storage::delete($imagePath);
    }

    public function DeleteProduct(Product  $product){
       $check = $product->delete();
       if($check){
           return redirect()->to('/admin/list-product');
       }
    }




}
