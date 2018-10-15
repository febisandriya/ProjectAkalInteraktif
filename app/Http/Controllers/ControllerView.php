<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ControllerView extends Controller
{
  public function index(){

    $page = 'welcome';
    $data = Product::all();
    return view($page)->with(compact('data'));
  }

  public function detailproduct($id)
  {
      $page='detailproduct';
      $data = Product::findOrFail($id);
      return view($page)->with(compact('data'));

  }


  public function registerSuccess(){

    $page = 'Auth.register-success';

    return view($page);
  }

    public function refreshCaptcha()  //fungsi untuk merefresh chapta
    {
      return response()->json(['captcha'=> captcha_img()]);
    }


}
