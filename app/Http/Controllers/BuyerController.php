<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index ()
    {
        $buyer=Buyer::has('transactions')->get();
        return response()->json(['data'=>$buyers],200);
    }

    public function show($id)
    {
        $buyer=Buyer::has('transactions')->findOrfail($id);
        return response()->json(['data'=>$buyer],200);
    }

``
}
