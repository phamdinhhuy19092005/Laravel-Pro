<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return "Xử lý thành công";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Xử lý thêm dữ liệu


        // Sử dụng để chuyển hướng người dùng từ một route hoặc controller đến một URL khác
        return redirect() -> route('post.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "Hiển thị bài viết" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
