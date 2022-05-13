@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('peminjaman.store') }}" method="post">
            @csrf
        <div class="mb-3" id="isinya">
            <input type="hidden" name="petugas" value="{{ auth::user()->name }}" id="">
            <label for="nis" class="form-label">NIS</label>
            <select name="nis" class="form-control" required>
                <option value="">- NIS -</option>
                @foreach ($student as $items)
                <option value="{{ $items->nis }}">{{ $items->nis }}</option>
                @endforeach
            </select>
            <label for="" class="form-label">Nama Peminjam</label>
            <select name="nama" id="" class="form-control">
                <option value="">- Nama -</option>
                @foreach ($student as $item)
                <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                @endforeach   
            </select>
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
                @foreach ($rayon as $item)
                <option value="{{ $item->rayon }}">{{ $item->rayon }}</option>
                @endforeach
            </select>
        </div> 
        <div class="mb-3">
            <label for="" class="form-label">Jenis Kelamin</label>
            <select name="jk" id="" class="form-control" required>
                <option value="">- Pilih Jenis Kelamin -</option>
                <option value="Laki-Laki">{{ __('Laki-Laki') }}</option>
                <option value="Perempuan">{{ __('Perempuan') }}</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <select name="judul" id="" class="form-control" required>
                <option value="">- SELECT JUDUL -</option>
                @foreach ($book as $items)
                <option value="{{ $items->judul }}">{{ $items->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="balik" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" id="balik" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Tambah List Pinjam Buku!</button>    
            <a href="{{ route('peminjaman.index') }}" class="btn btn-danger">Back</a>
        </div>   
        </form>
    </div>
</div>
{{-- <script>
    $(document).ready(function, e{
        $(#nis).on(change, function (){
            const nis = $(this).val();
            $.ajax({
                type = "GET",
                url: "{{ route('peminjaman.create') }}" + nis,
                success: function (data) {
                    $('#nama').empty();

                    data.forEach(function(d){
                        const input = 
                        '<input type="hidden" name="nama" value="${d.nama}" id="nama" class="form-control" required placeholder="Masukkan Nama..."> ';
                        $("#nama").append(input);
                    });
                }
            });
        });
    })
</script> --}}
@endsection

