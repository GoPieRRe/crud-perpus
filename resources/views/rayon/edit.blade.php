@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
                
            <form action="{{ route('rayon.update',$rayon->id) }}" method="post">

                @csrf
                @method('PUT')
                <div class="">
                    <div class="mb-3 text-left">
                        <label for="jdl" class="form-label fw-bold">Nama Rayon :</label>
                        <input type="text" id="jdl" name="rayon" value="{{ $rayon->rayon }}" class="form-control" required>
                    </div>
                    <div class="mb-3 text-left">
                        <label for="png" class="form-label fw-bold">Pembimbing :</label>
                        <input type="text" id="png" name="pembimbing" value="{{ $rayon->pembimbing }}" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3 text-left">
                    <label for="pnr" class="form-label fw-bold">No HP :</label>
                    <input type="number" name="no_hp" id="penerbitbuku" value="{{ $rayon->no_hp }}" class="form-control" required>
                </div>
                <div class="mb-3 text-left">
                    <button type="submit" class="btn btn-success">Update Rayon!</button>
                    <a href="{{ route('rayon.index') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection