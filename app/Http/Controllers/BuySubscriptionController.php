<?php

namespace App\Http\Controllers;

use App\Models\BuySubscription;
use App\Http\Requests\StoreBuySubscriptionRequest;
use App\Http\Requests\UpdateBuySubscriptionRequest;

class BuySubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBuySubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuySubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuySubscription  $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function show(BuySubscription $buySubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuySubscription  $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(BuySubscription $buySubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuySubscriptionRequest  $request
     * @param  \App\Models\BuySubscription  $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuySubscriptionRequest $request, BuySubscription $buySubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuySubscription  $buySubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuySubscription $buySubscription)
    {
        //
    }
}
