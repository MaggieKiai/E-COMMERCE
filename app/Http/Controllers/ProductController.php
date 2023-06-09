<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data= product::all();

        return view('product',['products'=>$data]);
    }

    public function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function search(Request $req){
        
     $data = product::where('name' ,'like', '%' .$req->input('query' ).'%')->get();
    return view('search' , ['products'=>$data]);
    }

    public function addToCart(Request $req){

        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
       
    }
    static function cartItem(){
        $userId = Session::get('user')['id'];
        
    }

}
