<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customers;
use Validator;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customers::all();
        return view('ecommerce.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecommerce.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'FirstName' => 'required',
            'LastName' => 'required',
            'Class' => 'required',
            'Room' => 'required',
            'Building' => 'required',
            'Address1' => 'required',
            'Address2' => 'required',
            'City' => 'required',
            'State' => 'required',
            'PostalCode' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'Email' => 'required',
            'VoiceMail' => 'required',
            'Password' => 'required',
            'CreditCard' => 'required',
            'CreditCardTypeID' => 'required',
            'CardExpMo' => 'required',
            'CardExpYr' => 'required',
            'BillingAddress' => 'required',
            'BillingCity' => 'required',
            'BillingRegion' => 'required',
            'BillingPostalCode' => 'required',
            'BillingCountry' => 'required',
            'ShipAddress' => 'required',
            'ShipCity' => 'required',
            'ShipRegion' => 'required',
            'ShipPostalCode' => 'required',
            'ShipCountry' => 'required',
            'DateEntered' => 'required',
        ]);
        customers::create($request->all());

        return redirect()->route('customer.index');
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
        $customers = customers::findOrFail($id);
        return view ('ecommerce.customer.edit', compact('customers'));
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
        $customers = customers::findOrFail($id);
        $customers->update($request->all());

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = customers::findOrFail($id);
        $customers->delete();
        return redirect()->route('customer.index');
    }
}
