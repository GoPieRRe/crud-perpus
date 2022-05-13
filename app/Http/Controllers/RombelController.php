<?php

namespace App\Http\Controllers;

use App\Models\rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rombel = rombel::latest()->paginate('5');
        return view('rombel.index',compact('rombel'))->with('i', (request()->input('page', 1) -1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rombel.create');
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
            'rombels' => 'required',
        ]);

        rombel::create($request->all());
        return redirect()->route('rombel.index')->with('success', 'Rombel added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(rombel $rombel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit(rombel $rombel)
    {
        return view('rombel.edit',compact('rombel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rombel $rombel)
    {
        $request->validate = ([
            'rombels' => 'required',
        ]);
        $rombel->update($request->all());
        return redirect()->route('rombel.index')->with('success', 'Rombel updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy(rombel $rombel)
    {
        $rombel->delete();
        return redirect()->route('rombel.index')->with('success','Rombel deleted!');
    }
}
