<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('orders')->delete();
        $orders = [
            ['id' => 1, 'name' => 'Product A', 'price' => '10', 'user_id'=>'1'],
            ['id' => 2, 'name' => 'Product B', 'price' => '20', 'user_id'=>'2'],
            ['id' => 3, 'name' => 'Product c', 'price' => '20', 'user_id'=>'1'],
            ['id' => 4, 'name' => 'Product D', 'price' => '15', 'user_id'=>'1'],
        ];


        foreach($orders as $order){
            Order::create($order);
        }
    }
}
