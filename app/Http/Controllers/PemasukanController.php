<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category_input;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $inputs = category_input::all();

        return view('pemasukan.index', compact('inputs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasukan.create');

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
            'gaji' => 'required',
            'tunjangan' => 'required',
            'bonus' => 'required',
        ]);

        $inputs = new category_input;
        $inputs->gaji =  $request->gaji;
        $inputs->tunjangan =  $request->tunjangan;
        $inputs->bonus =  $request->bonus;

        $inputs->save();

        return redirect('pemasukan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $input= category_input::find($id);
        return view('pemasukan.show', compact('input'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs = category_input::find($id);

        return view('pemasukan.edit', compact('inputs'));
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
        $inputs = category_input::find($id);

        $inputs->update($request->all());

        return redirect()->route('pemasukan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inputs = category_input::find($id);

        $inputs->delete();
        return redirect('pemasukan');
    }

}
