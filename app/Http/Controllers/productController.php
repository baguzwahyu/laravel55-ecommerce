<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\suppliers;
use App\category;
use Validator;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        return view('ecommerce.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = suppliers::all();
        $categorys = category::all();
        return view('ecommerce.product.create', compact('suppliers', 'categorys'));
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
            // 'SKU' => 'required',
            // 'IDSKU' => 'required',
            // 'VendorProductID' => 'required',
            'ProductName' => 'required',
            'ProductDescription' => 'required',
            'suppliers_id' => 'required',
            'categories_id' => 'required',
            'QuantityPerUnit' => 'string|nullable',
            'UnitPrice' => 'string|nullable',
            // 'MSRP' => 'required',
            'AvailableZise' => 'string|nullable',
            'AvailableColors' => 'string|nullable',
            'Size' => 'string|nullable',
            'Color' => 'string|nullable',
            'Discount' => 'string|nullable',
            'UnitWeight' => 'string|nullable',
            'UnitsInStock' => 'string|nullable',
            'UnitsOnOrder' => 'string|nullable',
            'ReorderLevel' => 'string|nullable',
            'ProductAvailable' => 'string|nullable',
            'DiscountAvailable' => 'string|nullable',
            'CurrentOrder' => 'string|nullable',
            'Picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Ranking' => 'string|nullable',
            'Note' => 'string|nullable',
        ]);

        $products = new products($request->input());

        if($file = $request->hasFile('Picture')) {
            
            $file = $request->file('Picture');
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/products/' ;
            $file->move($destinationPath,$fileName);
            $products->Picture = $fileName ;
        }
        $products->save();
        return redirect()->route('product.index');

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
        $products = products::findOrFail($id);
        return view ('ecommerce.product.edit', compact('products'));
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
        $products = products::findOrFail($id);
        $products->update($request->all());

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = products::findOrFail($id);
        $products->delete();
        return redirect()->route('product.index');
    }
}
