@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('students.store') }}" method="post">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nis</label>
            <input type="number" name="nis" min="1" class="form-control" id="exampleFormControlInput1" required placeholder="Masukkan Nis..">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan Nama...">
        </div>
        <div class="mb-3">
            
        </div>     
        <div class="mb-3">
            <label for="rombel" class="form-label">Rombel</label>
            <select name="rombel" id="" class="form-control" required>
                <option value="">- SELECT ROMBEL -</option>
                @foreach ($rombel as $items)
                <option value="{{ $items->rombels }}">{{ $items->rombels }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="rayon" class="form-label">Rayon</label>
            <select name="rayon" id="" class="form-control" required>
                <option value="">- SELECT RAYON -</option>
                @foreach ($rayons as $item)
                <option value="{{ $item->rayon }}">{{ $item->rayon }}</option>
                @endforeach
            </select>
        </div> 
        <div class="mb-3">
            <label for="rayon" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="" class="form-control" required>
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="Laki-Laki">{{ __('Laki-Laki') }}</option>
                <option value="Perempuan">{{ __('Perempuan') }}</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Add Student!</button>    
            <a href="{{ route('students.index') }}" class="btn btn-danger">Back</a>
        </div>   
        </form>
    </div>
</div>
@endsection