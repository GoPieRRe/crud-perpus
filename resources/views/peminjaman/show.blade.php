@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row mb-5 py-4">
            <h1><strong>Detail Peminjaman Buku</strong></h1>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Petugas : </label>
            <strong>{{ $peminjaman->petugas }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Nis Siswa : </label>
            <strong>{{ $peminjaman->nis }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Nama Siswa : </label>
            <strong>{{ $peminjaman->nama }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Rombel : </label>
            <strong>{{ $peminjaman->rombel }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Rayon : </label>
            <strong>{{ $peminjaman->rayon }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Judul Buku : </label>
            <strong>{{ $peminjaman->judul }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Tanggal Pinjam : </label>
            <strong>{{ $peminjaman->tgl_pinjam }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Tanggal Dikembalikan : </label>
            <strong>{{ $peminjaman->tgl_kembali }}</strong>
        </div>
        <div class="text-left">
            <label for="Petugas" class="fs-4 fw-bold col-label-form">Status : </label>
            <strong>{{ $peminjaman->status }}</strong>
        </div>
        <div class="text-left">
            <a href="{{ route('peminjaman.index') }}" class="btn btn-lg btn-danger">Back</a>
        </div>
    </div>
@endsection