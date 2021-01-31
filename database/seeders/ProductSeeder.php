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
                'name'=>'Intel Core i-9',
                'price'=>'1000$',
                'category'=>'accessories',
                'Description'=>'Intel 10th gen processor',
                'gallery'=>'https://cdn.mos.cms.futurecdn.net/7et3T4QRTzSdpBC5fZR4AK-970-80.jpg.webp'
            ],
            [
                'name'=>'Iphone 12',
                'price'=>'1200$',
                'category'=>'mobile',
                'Description'=>'We called it iphone12',
                'gallery'=>'https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f42f9d275542f2fe516d0ad%2F960x0.jpg%3Ffit%3Dscale'
            ],
            [
                'name'=>'GTX 3090',
                'price'=>'1500$',
                'category'=>'GPU',
                'Description'=>'Nvedia new gen processor',
                'gallery'=>'https://www.extremetech.com/wp-content/uploads/2020/09/04513fVhAyrk7lNoiDKTdPa-1.fit_scale.size_1700x956.v1600887262-640x360.jpg'
            ],
            [
                'name'=>'CBR 1000R',
                'price'=>'20000$',
                'category'=>'Bike',
                'Description'=>'New CBR 1000R',
                'gallery'=>'https://www.bennetts.co.uk/-/media/bikesocial/2020-january-images/2020-honda-cbr1000rr-r-fireblade-review/fireblade-2020_073.ashx?h=493&w=740&la=en&hash=5828B0A7CECAB12B5013D2051132D9419FD4B648'
            ]
        ]);
    }
}
