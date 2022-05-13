@extends('layouts.nav')

@section('content')
    <div class="container-xl">
        <div class="row table-wrapper">
            
            <form action="{{ route('rombel.update',$rombel->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="png">Nama Rombel</label>
                        <input type="text" id="pnr" name="rombels" value="{{ $rombel->rombels }}" placeholder="Masukkan Rombel..."  class="form-control" required>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Rombel!</button>
                    <a href="{{ route('rombel.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection