<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;

class CaisseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Cart::count()<=0 ){
            return redirect()->route('discography');
        }

        Stripe::setApiKey('sk_test_51Hf39aHaGvKGAPJJY3ZkNEikSktBvX3T9boxRaUIw9KZfIuc3ZhpfqbCQtZDHNwv4RRRJjgzb7GWS8Fg6eK8kjNA005GqjYqGl');
        $intent= PaymentIntent::create([
            'amount'=>round(Cart::total()),
            'currency'=> 'xof',
        ]);
        $clientSecret= Arr::get($intent,'client_secret');
        
        return view('djoz.caisse.index',[
            'clientSecret'=>$clientSecret
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::destroy();
       $data= $request->json()->all();
       return $data['paymentIntent'];
    }

    public function merci(){
        return view('djoz.layout.merci');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
