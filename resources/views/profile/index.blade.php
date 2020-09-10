@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<div class="row">
	<div class="col-lg-6">
		<h2>Profiles</h2>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-2">
		<h5> 
			<a href="{{ url('profile/create') }}">
				<button  type="button" class="btn btn-success" style="position:relative;">Add Profile</button>
			</a>
			
		</h5>
	</div>
	</div>
</div>



<table class="table table-borderless table-striped table-earning">
	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Password</th>
		<th>picture</th>
		<th>Edit</th>
		<th>Delete</th>
		


	</thead>

	@foreach($profile as $a)
	<tbody>
		<td>{{$a->name}}</td>
		<td>{{$a->email}}</td>
		<td>{{$a->mobile}}</td>
		<td>{{$a->password}}</td>
		<td><img src="uploads/profile/{{$a->image}}" style="width:150px; height: 100px; "> </td>
		

		<td>
			<a class="edit-link" onclick="fn()" href='{{ url("profile/$a->id/edit") }}'><button type="button" class="btn btn-primary">Edit</button></a>
			<script type="text/javascript">
				function fn(){
					$(document).on("click", ".edit-link", function() {
						window.location=$(this).attr('href');
					});
				}
			</script>
		</td>
		
		<td>
			<form action='{{ url("profile/$a->id") }}' method="post"> 
				@method('Delete')
				@csrf
				<button onclick="delfn(this)" type="submit" class="btn btn-danger">Delete</button> 
				<script type="text/javascript">
						function delfn() {
						  confirm("Do you want to delete");
						}
				</script>
			</form>
		</td>
		

	</tbody>

	@endforeach    	



</table>




</div>

</div>




@endsection()




