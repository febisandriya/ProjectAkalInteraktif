<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $page = 'home';//nama view atau blade yg tadi dibuat
      $data = Product::all();
      return view($page)->with(compact('data'));

    }

    public function productdetail($id)
    {
        $page='productdetail';
        $data = Product::findOrFail($id);
        return view($page)->with(compact('data'));

    }

    public function beli($id)
    {
        $page ='beli';
        $data = Product::findOrFail($id);
        return view($page)->with(compact('data'));

    }
}
