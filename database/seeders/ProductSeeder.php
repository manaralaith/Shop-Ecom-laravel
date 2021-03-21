<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
                [
                    'name'          => 'LG mobile',
                    'price'         => '200',
                    'description'   => 'A Smart phone And Mooie Phone',
                    'category'      => 'mobile',
                    'gallery'       => 'http://localhost/ecom-shop/public/images/ecom001.jpg'
                ],
                [
                    'name'          => 'sony mobile',
                    'price'         => '300',
                    'description'   => 'A Smart phone And Mooie Phone',
                    'category'      => 'mobile',
                    'gallery'       => 'http://localhost/ecom-shop/public/images/ecom002.png'
                ],
                [
                    'name'          => 'iphone mobile',
                    'price'         => '400',
                    'description'   => 'A Smart phone And Mooie Phone',
                    'category'      => 'mobile',
                    'gallery'       => 'http://localhost/ecom-shop/public/images/ecom003.png'
                ],
                [
                    'name'          => 'iphone mobile2',
                    'price'         => '500',
                    'description'   => 'A Smart phone And Mooie Phone',
                    'category'      => 'mobile',
                    'gallery'       => 'http://localhost/ecom-shop/public/images/ecom004.jpg'
                ],
                [
                    'name'          => 'LG pro mobile',
                    'price'         => '300',
                    'description'   => 'A Smart phone And Mooie Phone',
                    'category'      => 'mobile',
                    'gallery'       => 'http://localhost/ecom-shop/public/images/ecom005.png'
                ]

        ]);
    }
}
