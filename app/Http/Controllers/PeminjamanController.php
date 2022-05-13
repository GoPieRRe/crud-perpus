<?php

namespace App\Http\Controllers;

use App\Models\{peminjaman, book, rayon, rombel, students, User};
use Illuminate\Http\Request;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = peminjaman::latest()->paginate('5');
        return view('peminjaman.index',compact('peminjaman'))->with('i', (request()->input('page', 1) -1 ) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = students::all();
        $rombel = rombel::all();
        $rayon = rayon::all();
        $book = book::all();
        $user = User::all();
        return view('peminjaman.create',compact('student','rombel','rayon','book','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        peminjaman::create([
            'nama' => $request->nama,
            'judul'	=> $request->judul,
            'tgl_pinjam' => Carbon::now(),	
            'tgl_kembali' => $request->tgl_kembali,	
            'petugas' => $request->petugas,
            'nis'	=> $request->nis,
            'rombel'	=> $request->rombel,
            'rayon'	=> $request->rayon,
            'jk'=> $request->jk,
            'status' => $request->status,
        ]);
        return redirect()->route('peminjaman.index')->with('success', 'Buku Berhasil dipinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman $peminjaman)
    {
        $student = students::all();
        $rombel = rombel::all();
        $rayon = rayon::all();
        $book = book::all();
        $user = User::all();
        return view('peminjaman.edit',compact('student','rombel','rayon','book','user','peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        $request->validate([
            'nama' => "required",
            'judul'	=> "required",	
            'tgl_kembali' => "required",	
            'petugas' => "required",
            'nis'	=> "required",
            'rombel'	=> "required",
            'rayon'	=> "required",
            'jk'=> "required",
            'status' => "required",
        ]);
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Data Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Data dihapus!');
    }
}
