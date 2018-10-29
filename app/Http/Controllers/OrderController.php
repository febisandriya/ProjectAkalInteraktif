<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\Session;
class OrderController extends Controller
{
  public function OrderAction(Request $request){
        // dd($request);
    $this->validate($request, [
      'nama' => 'required',
      'email'   => 'required',
      'nohp' => 'required',
      'alamat'   => 'required',
      'product_id'   => 'required',
      $harga = 'harga'   => 'required',
      $qty = 'qty'   => 'required',
    ]);
      $total = $request->$harga*$request->$qty;
      $order = new Order();
      $order->nama = $request->get('nama');
      $order->email = $request->get('email');
      $order->nohp = $request->get('nohp');
      $order->alamat = $request->get('alamat');
      $order->product_id = $request->get('product_id');
      $order->qty = $request->$qty;
      $order->total = $total;
      $order->status = false;

      if($order->save()){
          $barang = Product::where('id',$request->product_id)->first();
          Session::put('nama',$request->get('nama'));
          Session::put('nohp',$request->get('nohp'));
          Session::put('alamat',$request->get('alamat'));
          Session::put('namaproduct',$barang->nama_product);
          Session::put('harga',$barang->harga);
          Session::put('qty',$request->get('qty'));
          Session::put('total',$total);

      return redirect()->route('detailorder');
    }
}

public function detailorder()
{
    $page='detail_order';
    return view($page);

}

}
