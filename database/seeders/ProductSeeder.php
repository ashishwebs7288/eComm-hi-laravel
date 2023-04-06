<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           [ 'name'=>'LG Tv',
            "price"=>"55000",
            "category"=>"LG",
            "description"=>"This is electronic Samrt TV and 4gb Ram",
            "gallery"=>"https://www.mylloyd.com/media/products/zoom1-min.jpg",
            
        ],
        [ 'name'=>'Samsung Tv',
        "price"=>"90000",
        "category"=>"Samsung",
        "description"=>"
        Samsung 80 cm (32 Inches) Wondertainment Series HD Ready LED Smart TV UA32T4340BKXXL (Glossy Black)",
        "gallery"=>"https://m.media-amazon.com/images/I/71a4ZQNqTiL._SL1500_.jpg",
        
    ],
    [ 'name'=>'Realme Tv',
    "price"=>"67000",
    "category"=>"Realme",
    "description"=>"This is electronic Samrt TV LED Television 80 cm",
    "gallery"=>"https://m.media-amazon.com/images/I/71a4ZQNqTiL._SL1500_.jpg",
    
],
[ 'name'=>'Intex Tv',
"price"=>"40000",
"category"=>"Intex",
"description"=>"Croma 102 cm (40 inch) Full HD LED Smart Android TV with Google Assistant (2022 model)",
"gallery"=>"https://www.mylloyd.com/media/products/zoom1-min.jpg",

],

    ]);
    }
}
