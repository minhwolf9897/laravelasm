<?php
/**
 * Created by PhpStorm.
 * User: minhw
 * Date: 7/25/2018
 * Time: 3:37 PM
 */
use Illuminate\Database\Seeder;
class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->delete();
        \Illuminate\Support\Facades\DB::table('products')->insert(
            [
                [
                    'id' =>1,
                    'name'=>'tùng lợn',
                    'description'=>'tùng lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>1,
                    'price'=>2000,
                    'image'=>'https://i.ytimg.com/vi/jNrq1JtCE1E/maxresdefault.jpg'
                ],

                [
                    'id' =>2,
                    'name'=>'tình lợn',
                    'description'=>'tình lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>1,
                    'price'=>2000,
                    'image'=>'https://anh.24h.com.vn/upload/2-2013/images/2013-05-25/1369447800-anh-dong-vat-dep6.jpg'
                ],

                [
                    'id' =>3,
                    'name'=>'nội lợn',
                    'description'=>'nội lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>2,
                    'price'=>2000,
                    'image'=>'http://hascofeed.com.vn/sites/default/files/styles/large/public/images/6_4.jpg?itok=grxLX-PV'
                ],

                [
                    'id' =>4,
                    'name'=>'nam lợn',
                    'description'=>'nam lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>3,
                    'price'=>2000,
                    'image'=>'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/05/07/139/22208210/3_72951.jpg'
                ],

                [
                    'id' =>5,
                    'name'=>'long lợn',
                    'description'=>'long lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>1,
                    'price'=>2000,
                    'image'=>'https://i.ytimg.com/vi/TLUM__o7nDA/maxresdefault.jpg'
                ],

                [
                    'id' =>6,
                    'name'=>'tùng lợn',
                    'description'=>'tùng lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>1,
                    'price'=>2000,
                    'image'=>'https://i.ytimg.com/vi/jNrq1JtCE1E/maxresdefault.jpg'
                ],

                [
                    'id' =>7,
                    'name'=>'sơn lợn',
                    'description'=>'sơn lợn nhưng tùng không lợn mà là lợn',
                    'categoryId'=>4,
                    'price'=>2000,
                    'image'=>'http://v2bnc00514.v2.webbnc.net/uploadv2/web/31/3159/news/2016/06/14/12/38/1465908193_images517920_1.jpg'
                ]

            ]
        );
    }

}