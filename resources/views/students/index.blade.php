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
<div class="container-xl py-5">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-6">
                        <h1><i class="fas fa-user-graduate"></i> Student</h1>
					</div>
					<div class="col-sm-6 m-0">
						<a href="{{ route('students.create') }}" class="btn btn-success btn-lg">New Student<i class="fas fa-plus"></i></a>
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
						<th>nis</th>
						<th>Nama Siswa</th>
						<th>Rombel</th>
                        <th>Rayon</th>
                        <th>Jenis kelamin</th>
						<th colspan="2">Actions</th>
					</tr>
				</thead>
                @foreach ($student as $b)
                    
				<tbody>
					 <tr>
                         <td>{{ ++$i; }}</td>
                         <td>{{ $b->nis }}</td>
                         <td>{{ $b->nama }}</td>
                         <td>{{ $b->rombel }}</td>
                         <td>{{ $b->rayon }}</td>
                         <td>{{ $b->jk }}</td>
                         <td>
                             <form action="{{ route('students.destroy', $b->id) }}" method="POST">
                            
                             <a href="{{ route('students.edit', $b->id) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>

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