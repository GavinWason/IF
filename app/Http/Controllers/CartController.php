<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->only(['checkout', 'complete']);
    }

    /**
     * Display the cart page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Add a menu to basket.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param slug
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->back()
                ->with('warning', 'The menu already exits in the basket!');
        }

        Cart::add($request->id, $request->name, $request->qty != 0 ? $request->qty : 1 , $request->price)
            ->associate('App\Menu');

        return redirect()->route('home.menu.show', $slug)
            ->with('success', 'Menu added to the basket successfully!');
    }

    public function checkout()
    {
        if (Cart::instance('default')->count() == 0){
            return redirect()->back()->with('error', 'Basket is empty! Add food items to your basket and checkout');
        }
        return view('checkout');
    }

    /**
     * Complete order checkout
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {
        //
    }

    /**
     * Remove menu item from cart
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return redirect()->back()
            ->with('success', 'Menu item removed from basket with success');
    }
}
