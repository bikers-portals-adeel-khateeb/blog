<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use App\ProductCategory;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

         $data = [

         'bikes' => Product::latest()->where('product_category_id', '1')->get(),
        
        'parts' =>  Product::latest()->where('product_category_id', '2')->get(),

         'accessories' =>  Product::latest()->where('product_category_id', '3')->get()


         ];

        return view('admin_dashboard')->with($data);
    }

    public function create()
    {
        $categories = ProductCategory::all();

        return view('admin_dashboard.add_product')->with('categories', $categories);
    }
}
