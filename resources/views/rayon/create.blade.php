@extends('layouts.nav')

@section('content')
    <div class="container-xl">
        <div class="row table-wrapper">
            
            <form action="{{ route('rayon.store') }}" method="post">
                @csrf
                <div class="mb-3 text-left">
                    <div class="form-group">
                        <label for="jdl" class="form-label fw-bold">Nama Rayon :</label>
                        <input type="text" id="jdl" placeholder="Masukkan Nama Rayon..." name="rayon" class="form-control" required>
                        <label for="pnr" class="form-label fw-bold">Pembimbing :</label>
                        <input type="text" id="png" name="pembimbing" placeholder="Masukkan Pembimbing..." class="form-control" required>
                        <label for="png" class="form-label fw-bold">no hp :</label>
                        <input type="number" min=0 id="pnr" name="no_hp" placeholder="Masukkan No HP..."  class="form-control" required>
                    </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Add Rayon!</button>
                    <a href="{{ route('rayon.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection