<?php


use App\Models\Admin;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $admin = User::create([
            "name"=>"admin",
            "email"=>"admin@localhost",
            "password"=> bcrypt("admin")
        ]);
        Admin::create([
            "user_id"=>$admin->id,
            "role"=>"ADMIN"
        ]);

        // \App\Models\User::factory(10)->create();
//        Category::factory(100)->create();
//        Product::factory(100)->create();
//        Order::factory(50)->create();
//        $order=Order::all();
//       foreach ($order as $item){
//           $index=random_int(1,10);
//           $product=Product::all()->random($index);
//           $grandtotal=0;
//           foreach ($product as $prd){
//               $qty=random_int(1,20);
//               $grandtotal+=$qty*$prd->price;
//                DB::table('orders_products')->insert([
//                   'qty'=> $qty,
//                    'order_id'=>$item->id,
//                    'product_id'=>$prd->id,
//                    'price'=>$prd->price
//                ]);
//           }
//           $item->update(['grand_total'=>$grandtotal]);
//       }
    }
}
