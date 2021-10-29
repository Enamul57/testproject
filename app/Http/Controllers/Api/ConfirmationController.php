<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Confirm;

class ConfirmationController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pay = new Confirm;
        $pay->place = $request->place;
        $pay->placeCity = $request->placeCity;
        $pay->date = $request->date;
        $pay->time = $request->time;
        $pay->name = $request->name;
        $pay->email = $request->email;
        $pay->phone = $request->phone;
        $pay->city = $request->city;
        $pay->area = $request->area;
        $pay->postcode = $request->postcode;
        $pay->bed = $request->bed;
        $pay->bath = $request->bath;
        $pay->kitchen = $request->kitchen;
        $pay->fridge = $request->fridge;
        $pay->garden = $request->garden;
        $pay->bedpay = $request->bedpay;
        $pay->bathpay = $request->bathpay;
        $pay->kitpay = $request->kitpay;
        $pay->fridgepay = $request->fridgepay;
        $pay->gardenpay = $request->gardenpay;
        $pay->subtotal = $request->subtotal;
        $pay->total = $request->total;
        $pay->save();

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
