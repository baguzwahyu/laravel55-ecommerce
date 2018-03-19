<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shippers;
use Validator;

class shipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippers = shippers::all();
        return view('ecommerce.shipper.index', compact('shippers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecommerce.shipper.create');
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
            'CompanyName' => 'required',
            'Phone' => 'required',
        ]);
        shippers::create($request->all());

        return redirect()->route('shipper.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shippers = shippers::findOrFail($id);
        return view('ecommerce.shipper.show', compact('shippers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shippers = shippers::findOrFail($id);
        return view ('ecommerce.shipper.edit', compact('shippers'));
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
        $shippers = shippers::findOrFail($id);
        $shippers->update($request->all());

        return redirect()->route('shipper.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shippers = shippers::findOrFail($id);
        $shippers->delete();
        return redirect()->route('shipper.index');
    }
}
