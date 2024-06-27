<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'iphone14'
            ],
            [
                'id' => '2',
                'name' => 'iphone15'
            ],
            [
                'id' => '3',
                'name' => 'iphone13'
            ],
        ];

        return view('list-products',compact('data'));
    }

    public function getProduct($id, $name = '')
    {
        echo $id, $name;
    }

    public function updateProduct(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }
}
