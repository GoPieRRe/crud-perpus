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
					<div class="col-sm-6">
						<h1><i class="fas fa-address-book"></i> Rayon</h1>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('rayon.create') }}" class="btn btn-success"><i class="fas fa-plus"></i>Add Rayon</a>
					</div>
				</div>
			</div>
            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Rayon</th>
						<th>Pembimbing</th>
						<th>No HP</th>
						<th colspan="2">Actions</th>
					</tr>
				</thead>
                @foreach ($rayon as $b)
                    
				<tbody>
					 <tr>
                         <td>{{ ++$i; }}</td>
                         <td>{{ $b->rayon }}</td>
                         <td>{{ $b->pembimbing }}</td>
                         <td>{{ $b->no_hp }}</td>
                         <td>
                             <form action="{{ route('rayon.destroy',$b->id) }}" method="POST">
                            
                             <a href="{{ route('rayon.edit',$b->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>

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
{{-- </div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
 --}}

			{{-- <form action="{{ route('book.store') }}" method="POST" id="addmodal">
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Book</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Judul Buku</label>
						<input type="text" name="judulbuku" class="form-control" placeholder="Masukkan Judul Buku..." required>
					</div>
					<div class="form-group">
						<label>Pengarang</label>
						<input type="text" name="pengarangbuku" class="form-control" placeholder="Masukkan Pengarang Buku..." required>
					</div>
					<div class="form-group">
						<label>Penerbit</label>
						<textarea class="form-control" name="Penerbitbuku" placeholder="Penerbit" required></textarea>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<button type="submit" class="btn btn-succes">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Book</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div> --}}
</body>

@endsection