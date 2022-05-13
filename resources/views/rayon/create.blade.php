@extends('layouts.nav')

@section('content')
    <div class="container-xl">
        <div class="row table-wrapper">
            
            <form action="{{ route('rayon.store') }}" method="post">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="jdl" class="form-label">Nama Rayon</label>
                        <input type="text" id="jdl" placeholder="Masukkan Nama Rayon..." name="rayon" class="form-control" required>
                        <label for="pnr">Pembimbing</label>
                        <input type="text" id="png" name="pembimbing" placeholder="Masukkan Pembimbing..." class="form-control" required>
                        <label for="png">no hp</label>
                        <input type="number" min=0 id="pnr" name="no_hp" placeholder="Masukkan No HP..."  class="form-control" required>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Rayon!</button>
                    <a href="{{ route('book.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection