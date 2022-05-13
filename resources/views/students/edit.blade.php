@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('students.update',$student->id) }}" method="post">

            @csrf
            @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nis</label>
            <input type="number" name="nis" min="1" value="{{ $student->nis }}" class="form-control" id="exampleFormControlInput1" required placeholder="Masukkan Nis..">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" value="{{ $student->nama }}" name="nama" id="nama" class="form-control" required placeholder="Masukkan Nama...">
        </div>     
        <div class="mb-3">
            <label for="rombel" class="form-label">Rombel</label>
            <select name="rombel" id="" class="form-control" required>
                <option value="{{ $student->rombel }}">{{ $student->rombel }}</option>
                @foreach ($rombel as $items)
                <option value="{{ $items->rombels }}">{{ $items->rombels }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="rayon" class="form-label">Rayon</label>
            <select name="rayon" id="" class="form-control" required>
                <option value="{{ $student->rayon }}">{{ $student->rayon }}</option>
                @foreach ($rayons as $item)
                <option value="{{ $item->rayon }}">{{ $item->rayon }}</option>
                @endforeach
            </select>
        </div> 
        <div class="mb-3">
            <label for="rayon" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="" class="form-control" required>
                <option value="{{ $student->jk }}">{{ $student->jk }}</option>
                <option value="{{ __('Laki-Laki') }}">{{ __('Laki-Laki') }}</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update siswa!</button>
            <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
        </div>
    </form>
    </div>
    </div>
    @endsection
            