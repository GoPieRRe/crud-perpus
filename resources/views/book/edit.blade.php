@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
                
            <form action="{{ route('book.update',$book->id) }}" method="post">

                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="jdl" class="form-label">Judul</label>
                        <input type="text" id="jdl" name="judul" value="{{ $book->judul }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="png">Pengarang</label>
                        <input type="text" id="png" name="pengarang" value="{{ $book->pengarang }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pnr">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbitbuku" value="{{ $book->penerbit }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Book!</button>
                    <a href="{{ route('book.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection