<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    //

    public function create()
    {
        return "OKOOK";
    }
    public function delete($id){
        return "Xóa sản phẩm có id: {$id}";
    }
}
