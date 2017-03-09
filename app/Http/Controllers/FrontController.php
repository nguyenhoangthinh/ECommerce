<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class FrontController extends Controller
{
    public function index()
    {
        $shirts = DB::table('products')
                    ->offset(0)
                    ->limit(4)
                    ->orderBy('created_at', 'desc')
                    ->get();
    	return view('front.home',compact('shirts'));
    }

    public function shirts()
    {
        $shirts=Product::all();
    	return view('front.shirts',compact('shirts'));
    }

    public function shirt($id)
    {
        $shirts = DB::table('products')
                    ->offset(0)
                    ->limit(4)
                    ->orderBy('created_at', 'desc')
                    ->get();
        $shirt=Product::find($id);
    	return view('front.shirt',compact('shirt','shirts'));
    }
}
