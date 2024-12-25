<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id)
    {
        // return "Hiển thị sản phẩm theo id: " . $id;
        $colors = ['red', 'blue'];

        $price = 20000000;

        return view('product.show', compact('id', 'price', 'colors'));
    }

    function create()
    {
        // return "Tạo sản phẩm";
        return view('product.create');
    }

    function update($id)
    {
        return "Cập nhật sản phẩm" . $id;
    }
}
