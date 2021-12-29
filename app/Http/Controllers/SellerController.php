<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index ()
    {
        $seller=Seller::has('products')->get();
        return response()->json(['data'=>$sellers],200);
    }

    public function show($id)
    {
        $seller=Seller::has('products')->findOrfail($id);
        return response()->json(['data'=>$seller],200);
    }
}
