@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">
  <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Profile</h2>
                                    {{-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> --}}
                                </div>
                            </div>
                        </div>
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Creat</a>
			</li>
			<li class="breadcrumb-item active">Profile</li>
		</ol>

		
	</div>
</div>



{{-- ??????????????????????????????????????????????????????????????????????????????? --}}

<form action="{{url('profile')}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label class="control-label mb-1">Name</label>
		<input id="" name="name" type="text" class="form-control"  value="">
	</div>
	<div class="form-group has-success">
		<label for="cc-name" class="control-label mb-1">Email</label>
		<input id="cc-name" name="email" type="text" class="form-control"  
		autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
		
	</div>
	<div class="form-group">
		<label class="control-label mb-1">Mobile</label>
		<input id="" name="mobile" type="text" class="form-control"  value="">
	</div>
	<div class="form-group ">
		<label for="cc-name" class="control-label mb-1">Password</label>
		<input id="cc-name" name="password" type="text" class="form-control"  
		autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
	</div>
	<div class="input-group ">
		<label  class="control-label mb-1">Image</label>
		<input  name="image" type="file" class="form-control"  
		>
	</div>
	
	
	<div class="row">
		
		
	</div>
	<div>
		<button type="submit" class="btn btn-lg btn-info btn-block">
			<i class="fa fa-box fa-lg"></i>&nbsp;
			
		</button>
	</div>
</form>


{{-- ????????????????????????????????????????????????????????????????????????????? --}}




</div>

</div>




@endsection()