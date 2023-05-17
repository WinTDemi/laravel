<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function index(Request $request)
    {
        $value = $request->input('rule');
        $message = "giá trị rule là {$value} bạn là Admin";
        return response($message);
    }
}
