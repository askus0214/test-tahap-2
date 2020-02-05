<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category_output;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $outputs = category_output::all();

        return view('pengeluaran.index', compact('outputs'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sewa_kost' => 'required',
            'makan' => 'required',
            'pakaian' => 'required',
            'liburan' => 'required',
        ]);

        $outputs = new category_output;
        $outputs->sewa_kost =  $request->sewa_kost;
        $outputs->makan =  $request->makan;
        $outputs->pakaian =  $request->pakaian;
        $outputs->liburan =  $request->liburan;

        $outputs->save();

        return redirect('pengeluaran');
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
        $outputs = category_output::find($id);

        return view('pengeluaran.edit', compact('outputs'));
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
        $outputs = category_output::find($id);

        $outputs->update($request->all());

        return redirect()->route('pengeluaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outputs = category_output::find($id);

        $outputs->delete();
        return redirect('pengeluaran');    }
}
