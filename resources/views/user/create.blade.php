@extends('post.layout')
@section('content')
<div class="page-content">
	<div class="page-content-wrap">
		
		<!-- START X-NAVIGATION VERTICAL -->
		<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
			<!-- TOGGLE NAVIGATION -->
			<li class="xn-icon-button">
				<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
			</li>
			<!-- END TOGGLE NAVIGATION -->
			<!-- SIGN OUT -->
			<li class="xn-icon-button pull-right">
				<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
			</li>
			<!-- END SIGN OUT -->
		</ul>
		<!-- END X-NAVIGATION VERTICAL -->
		<!-- START BREADCRUMB -->
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data Tables</li>
		</ul>
		<!-- END BREADCRUMB -->
		<!-- PAGE CONTENT WRAPPER -->
		<div class="row">
			<div class="col-md-8 mx-auto">
				<h4><span class=""></span>Create User</h4>
			</div>
			
		</div>
		<div class="card">
			<div class="col-md-8 mx-auto">
				<form action="{{ route('post.store') }}" method="post">
					@csrf
					<div class="form-group">
						<label for="title">Nama</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label for="title">email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="title">password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" value="simpan" class="btn btn-success">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection