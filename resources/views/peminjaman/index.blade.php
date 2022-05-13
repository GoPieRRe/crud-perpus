@extends('layouts.nav')

@section('content')
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-6">
                        <h1><i class="fas fa-book"></i> Peminjaman</h1>
					</div>
					<div class="col-sm-6 m-0">
						<a href="{{ route('peminjaman.create') }}" class="btn btn-success btn-lg">Borrowing<i class="fas fa-plus"></i></a>
					</div>
				</div>
			</div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No</th>
                        <th>Nama Petugas</th>
						<th>nis</th>
						<th>Nama Siswa</th>
                        <th>Judul</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
						<th>Status</th>
						<th colspan="3">Actions</th>
					</tr>
				</thead>
                @foreach ($peminjaman as $b)
                    
				<tbody>
					 <tr>
                         <td>{{ ++$i; }}</td>
                         <td>{{ $b->petugas }}</td>
                         <td>{{ $b->nis }}</td>
                         <td>{{ $b->nama }}</td>
                         <td>{{ $b->judul }}</td>
                         <td>{{ $b->tgl_pinjam }}</td>
                         <td>{{ $b->tgl_kembali }}</td>
						 <td><button disabled class="@if($b->status == "Belum Dikembalikan"){{ ('btn btn-danger') }}@elseif($b->status == "Di Pinjam"){{ ('btn btn-secondary') }} @elseif($b->status == "Sudah Dikembalikan"){{ ('btn btn-success') }} @else {{ ('btn btn-warning') }} @endif">{{ $b->status }}</button></td>
                         <td>
                             <form action="{{ route('peminjaman.destroy', $b->id) }}" method="POST">
                            
                             <a href="{{ route('peminjaman.edit', $b->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>

                             @csrf
								@method('DELETE')
                             <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure??')"><i class="fas fa-trash"></i></button>
                            </form>
                         </td>
						 
                     </tr>
				</tbody>
                @endforeach
			</table>
		</div>
	</div> 
</body>

@endsection