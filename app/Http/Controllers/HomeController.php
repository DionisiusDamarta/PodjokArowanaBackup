<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('name', 'asc')->paginate(12);
        $this->data['products'] = $products;
        $this->data['categories'] = Category::orderBy('name', 'ASC')->get();
        return view('user.home', $this->data);
    }

    public function contact()
    {
        $this->data['categories'] = Category::orderBy('name', 'ASC')->get();
        return view('user.contact', $this->data);
    }
}
