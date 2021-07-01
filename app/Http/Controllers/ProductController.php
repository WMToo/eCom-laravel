<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use PhpParser\Node\Stmt\Else_;
use Session,DB;


class ProductController extends Controller
{
    function index()
    {
        $data=Product::all();
        return view('product',['product'=>$data]);
    }

    function detail($id){
        $data= Product::find($id);  
        return view('detail',['product'=>$data]);

    }

    function addToCart(Request $req){

        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }

    static function cartItem(){

        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
        
    }

    function cartlist(){

        $userId=Session::get('user')['id'];
        $cart=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['cart'=>$cart]);
        
    }


    function removecart($id){

        Cart::destroy($id);

        return redirect('/cartlist');
        
    }

    function orderNow(){

        $userId=Session::get('user')['id'];
        $total=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
        
    }

    function orderPlace(Request $req){

        

        $userId=Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)
        ->get();

        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status='Pending';
            $order->paymment_method=$req->payment;
            $order->paymment_status='Pending';
            $order->address=$req->address;
            $order->save();

            Cart::where('user_id',$userId)
            ->delete();
        }

        return redirect('/');
     
    }

    function myorder(){

        $userId=Session::get('user')['id'];
        $order=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        // ->select('products.*')
        ->get();

        return view('myorder',['order'=>$order]);
        
    }
    

}
