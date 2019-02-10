<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	
      
     $data = [

    	 'bikes' => Product::latest()->where('product_category_id', '1')->take(1)->get(),
    	
    	'parts' =>  Product::latest()->where('product_category_id', '2')->take(1)->get(),

    	 'accessories' =>  Product::latest()->where('product_category_id', '3')->take(1)->get()


    	 ];

    	return view('home')->with($data);


    }

    public function bikes()
        {
    $bikes = Product::latest()->where('product_category_id', '1')->take(100)->get();

            return view('bikes')->with('bikes',$bikes);

        }

 public function parts()
        {
    $parts = Product::latest()->where('product_category_id', '2')->take(100)->get();

            return view('parts')->with('parts',$parts);

        }



 public function accessories()
        {
    $accessories = Product::latest()->where('product_category_id', '3')->take(100)->get();

            return view('accessories')->with('accessories',$accessories);

        }




}


