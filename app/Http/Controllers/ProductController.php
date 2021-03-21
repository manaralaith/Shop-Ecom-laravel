<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    function index() {

        $data = Product::all();

        return view('products',['products'=>$data]);
    }

    function detail($id) {

        // return Product::find($id);  يعطينا تفاصيل المنتج اي بياناته
        $data = Product::find($id);

        return view('detail', ['product'=>$data]);
    }

    function search(Request $reg) {

        // return $reg->input();   //....... resultaaat     {"query":"iphone"}
        // from header page
        // <form class="d-flex" action="search">
        //     <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        //     <button class="btn btn-outline-success" type="submit">Search</button>
        // </form>

        //   return $data = Product::where('name', 'like', '%'. $reg->input('query'). '%')->get();
        // resutaat
        // [{"id":29,"name":"iphone mobile","price":"400","category":"mobile",
        // "description":"A Smart phone And Mooie Phone",
        // "gallery":"http:\/\/localhost\/ecom-shop\/public\/images\/ecom003.png",
        // "created_at":null,"updated_at":null},{"id":30,"name":"iphone mobile2",
        // "price":"500","category":"mobile","description":"A Smart phone And Mooie Phone",
        // "gallery":"http:\/\/localhost\/ecom-shop\/public\/images\/ecom004.jpg",
        // "created_at":null,"updated_at":null}]

        $data = Product::where('name', 'like', '%'. $reg->input('query'). '%')->get();

        return view('search', ['products'=>$data]);
    }

    function addToCart(Request $reg) {

        if($reg->session()->has('user')) {

            $cart = new Cart;
            $cart->user_id    = $reg->session()->get('user')['id'];
            $cart->product_id = $reg->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');
        }


    }

    static function cartItem() {

        $userId = Session::get('user')['id'];

        return Cart::where('user_id', $userId)->count();

    }


}
