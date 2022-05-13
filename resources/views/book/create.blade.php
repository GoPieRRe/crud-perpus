@extends('layouts.nav')

@section('content')
    <div class="container-xl">
        <div class="row table-wrapper">
            
            <form action="{{ route('book.store') }}" method="post">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="jdl" class="form-label">Judul</label>
                        <input type="text" id="jdl" placeholder="Masukkan Judul..." name="judul" class="form-control" required>
                        <label for="pnr">Penerbit</label>
                        <input type="text" id="png" name="pengarang" placeholder="Masukkan Pengarang..." class="form-control" required>
                        <label for="png">Pengarang</label>
                        <input type="text" id="pnr" name="penerbit" placeholder="Masukkan Penerbit..."  class="form-control" required>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Book!</button>
                    <a href="{{ route('book.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection