<?php

namespace App\Http\Controllers;

use App\Product;
use App\Deal ;
use Illuminate\Http\Request;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::orderBy('name')->get();
        $deals = Deal::latest()->get();

        return view('website.deals', compact('products', 'deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($productId)
    {
        //
        return view('website.deals', compact('productId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Deal::create($request->all());

//        $product = Product::find($request->product_id);
//
//        if ($request->price) {
//            $product->price = $request->price;
//        } else if ($request->percentage) {
//            $product->promotion = 1;
//            $product->promotion_price = ceil($product->price * $request->percentage / 100);
//            $product->starting_date = now();
//            $product->last_date = $request->expire;
//        }
//
//        $product->save();

        return redirect()->back();
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
     * @param    $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Deal $deal
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Deal $deal)
    {
        //
        $deal->delete();

        return redirect(route('deals.index'));
    }
}
