<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'oppo mobile',
            'price'=>'40000',
            'description'=>'Oppo mobile phones merge functionality with a sleek design. Check out LGs wide range of mobile phones to find out which smartphone suits you today',
            'category'=>'mobile',
            'gallery'=>'https://www.zdnet.com/a/img/resize/a599efb452885d4f668855aea18aae668867a960/2023/02/06/10e9ac75-29ce-4e6c-b2fb-8df48e1e40b0/oneplus-11-never-settle.jpg?auto=webp&fit=crop&height=900&width=1200',
                ],
                [
                    'name'=>'Flatscreen TV',
            'price'=>'25000',
            'description'=>'Flatscreen Tv merge functionality with a sleek design. Check out LGs wide range of mobile phones to find out which smartphone suits you today',
            'category'=>'mobile',
            'gallery'=>'https://www.zdnet.com/a/img/resize/a599efb452885d4f668855aea18aae668867a960/2023/02/06/10e9ac75-29ce-4e6c-b2fb-8df48e1e40b0/oneplus-11-never-settle.jpg?auto=webp&fit=crop&height=900&width=1200',
                    ],
                [
                    'name'=>'Sony Tv',
            'price'=>'60000',
            'description'=>'Sony merge functionality with a sleek design. Check out LGs wide range of mobile phones to find out which smartphone suits you today',
            'category'=>'tv',
            'gallery'=>'https://www.zdnet.com/a/img/resize/a599efb452885d4f668855aea18aae668867a960/2023/02/06/10e9ac75-29ce-4e6c-b2fb-8df48e1e40b0/oneplus-11-never-settle.jpg?auto=webp&fit=crop&height=900&width=1200',
                    ],
                [
                    'name'=>'LG fridge',
            'price'=>'30000',
            'description'=>'LG fridge phones merge functionality with a sleek design. Check out LGs wide range of mobile phones to find out which smartphone suits you today',
            'category'=>'fridge',
            'gallery'=>'https://www.zdnet.com/a/img/resize/a599efb452885d4f668855aea18aae668867a960/2023/02/06/10e9ac75-29ce-4e6c-b2fb-8df48e1e40b0/oneplus-11-never-settle.jpg?auto=webp&fit=crop&height=900&width=1200',
                    ],


           
        ]);
    }
}
