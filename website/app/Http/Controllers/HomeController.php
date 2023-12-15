<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function media()
    {
        return view('file-manager');
    }
    public function book()
    {
        $books = Book::all();

        return view('book', ['books' => $books]);
    }
    public function product()
    {
        $order = Order::find(1);
        $products = $order->products;

        return view('product', ['products' => $products,'order'=> $order]);
    }

}
