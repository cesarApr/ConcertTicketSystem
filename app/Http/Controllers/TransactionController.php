<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
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
        return view('pages.product.transaction');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $transaction = Transaction::all();
        // $validateData = $request->validate([
        //     'user_id' => 'required',
        //     'concert_id' => 'required',
        //     'title' => 'required',
        //     'schedule' => 'required',
        //     'location' => 'required',
        //     'qty' => 'required',
        // ]);
        // Transaction::create($validateData);
        // Transaction::create([
        //     'user_id'       => $request->user_id,
        //     'concert_id'    => $request->concert_id,
        //     'title'         => $request->title,
        //     'schedule'      => $request->schedule,
        //     'location'      => $request->location,
        //     'qty'           => $request->qty,
        // ]);

        $rules = [
            'user_id'       => 'required',
            'concert_id'    => 'required',
            'title'         => 'required',
            'schedule'      => 'required',
            'location'      => 'required',
            'qty'           => 'required',
        ];

        $validateData = $request->validate($rules);
        // $concert = Concert::find($request->concert_id);
        // $concert->qty -= $request->qty;
        // $concert->save();

        return redirect('/ticket/hololive')->with('success', 'transaction is successfully saved');
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
