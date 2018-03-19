<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\member;
use App\payment;
use App\shippers;
use Validator;
use DB;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = orders::all();
        // return view('ecommerce.order.index', compact('orders'));

      $orders = DB::table('shippers')
             ->join('orders', 'orders.shippers_id', '=', 'shippers.id')
             ->join('payments', 'orders.payments_id', '=', 'payments.id')
             ->join('members', 'orders.members_id', '=', 'members.id')
             ->select('orders.*', 'payments.*', 'members.*', 'shippers.*')->get();

      return view('ecommerce.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = member::all();
        $payments = payment::all();
        $shippers = shippers::all();
        return view('ecommerce.order.create', compact('members', 'payments', 'shippers'));
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
            // 'PaymentType' => 'required',
            // 'Allowed' => 'required',
        ]);
        orders::create($request->all());

        return redirect()->route('order.index');
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
