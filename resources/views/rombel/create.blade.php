@extends('layouts.nav')

@section('content')
    <div class="container-xl">
        <div class="row table-wrapper">
            
            <form action="{{ route('rombel.store') }}" method="post">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="mb-3 text-left">
                        <label class="form-label fw-bold" for="png">Nama Rombel :</label>
                        <input type="text" id="pnr" name="rombels" placeholder="Masukkan Rombel..."  class="form-control" required>
                    </div>
                <div class="mb-3 text-left">
                    <button type="submit" class="btn btn-success">Add Rombel!</button>
                    <a href="{{ route('rombel.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection