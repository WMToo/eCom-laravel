<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB,Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('products')-> insert([
            [
            'name'=>'LG Mobile',
            'price'=>"200",
            'description'=>"a phone",
            'category'=>"mobile",
            'gallery'=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"
            ],
            [
            'name'=>'DG Mobile',
            'price'=>"500",
            'description'=>"a phone 2",
            'category'=>"mobile2",
            'gallery'=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"
            ],
            [
            'name'=>'EG Mobile',
            'price'=>"600",
            'description'=>"a phone 3",
            'category'=>"mobile3",
            'gallery'=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"
            ],
            [
            'name'=>'PG Mobile',
            'price'=>"651",
            'description'=>"a phone 4",
            'category'=>"mobile4",
            'gallery'=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"
            ],
            [
            'name'=>'GG Mobile',
            'price'=>"677",
            'description'=>"a phone 5",
            'category'=>"mobile5",
            'gallery'=>"https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg"
            ]

    ]);
    }
}
