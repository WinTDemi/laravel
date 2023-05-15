<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/single/{one}', function ($one) {
    //truyền một parameter
    return "$one";
});

Route::get('/double/{one}/{two}', function ($one, $two) {
    //truyền hai parameter
    return "$one & $two";
});

Route::get('login/{username?}/{password?}', function ($username=null, $password=null) {
    //parameter không bắt buộc thì bạn chỉ việc thêm dấu
    if (!$username) {
        return "Xin mời nhập tên đăng nhập";
    }
    if (!$password) {
        return "Xin mời nhập mật khẩu";
    }
    else {
        return "tài khoải: $username <br> mật khẩu: $password";
    }

});

Route::get('/test-name/{name}/{var}', function ($name, $var) {
    //gọi parameter name
    if($name == 'where-string') $varName = 'string';
    if($name == 'where-number') $varName = 'number';
    return redirect()->route("test.$name", ["$varName" => "$var"]);
});

Route::prefix('test')->name('test.')->group(function () {
    Route::get('/where-number/{number}', function ($number) {
        //parameter number
        return "$number";
    })->whereNumber('number')->name('where-number');
    
    Route::get('/where-string/{string}', function ($string) {
        //parameter string
        return "$string";
    })->whereAlpha('string')->name('where-string');
});