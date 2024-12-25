<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostControll;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Đinh tuyến cơ bản

Route::get('/post', function () {
    return "Đây là trang bài viết";
});

// Admin

Route::get('/admin', function () {
    return "Đây là trang admin";
});

Route::get('/admin/add-product', function () {
    return "Đây là trang thêm sản phẩm";
});

// ========== Định tuyến có tham số
Route::get('/posts/{id}', function ($id) {
    return "Đây là trang bài viết " . $id;
});

Route::get('/posts/{cate_id}/page/{page}', function ($cate_id, $page) {
    return $cate_id . "--" . $page;
});

// ========== Đặt tên định tiến

Route::get('users/profile', function () {
    return route('profile');
})->name('profile');


Route::get('/admin/products/add', function () {
    return route('products.add');
}) -> name('products.add');

// ========== Định tuyến có tham số

// domain/users => Hiển thị ra danh sách người dùng
// dmain/users/1 => Hiện thị chi tiết thông tin người dùng


Route::get('/users/{id?}/', function ($id = 0) {
    return $id;
});

// ========== Định tuyến có tham số ràng buộc biểu thức chính quy


// Route::get('/products/{id}', function ($id) {
//     return $id;
// })-> where('id', '[0-9]+'); // loại bỏ những thông tin rác vào hệ thống


// Route::get('/products/{slug}/{id}', function ($slug, $id) {
//     return $id . '---' . $slug;
// });

// ========== Định tuyến qua view

Route::view('post', 'post', ['id' => 20]);

// ========== Định tuyến đến controller

Route::get('products/show/{id}', [ProductController::class, 'show']);
Route::get('products/create', [ProductController::class, 'create']);
Route::get('products/update/{id}', [ProductController::class, 'update']);


Route::resource('post', PostControll::class);

// ========== Bài tập Routing
// Route::get('admin/posts', function (){
//     return "Trang danh sách bài viết: " . route('admin.posts');
// }) -> name('admin.posts');

// Route::get("admin/posts/add-post", function (){
//     return 'Trang thêm bài viết: ' . route('admin.posts.add-post');
// }) -> name('admin.posts.add-post');


// Route::get('admin/posts/update-post', function (){
//     return "Trang cập nhật danh sách bài viết: " . route('admin.posts.update-post');
// }) -> name('admin.posts.update-post');


// Route::get('admin/posts/delete-post', function (){
//     return "Trang xóa danh sách bài viết: " . route('admin.posts.delete-post');
// }) -> name('admin.posts.delete-post');

# Quản lý bài viết trong admin

Route::get('admin/post/create', [AdminPostController::class, 'create']);
Route::get('admin/post/delete/{id}', [AdminPostController::class, 'delete']);

