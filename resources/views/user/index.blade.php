@extends('user.layout')
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
			<h4><span class=""></span>List user</h4>
		</div>
		<div class="col">
		<div class="card">
			<table class="table table-responsive">
				<thead>
					<tr>
						<th width="250px">Nama</th>
						<th width="550px">Email</th>
						<th>Password</th>
						<th >Action</th>
					</tr>
				</thead>
				<tbody>
						@foreach($users as $user)
					<tr>
						<td>{{ $user -> name }}</td>
						<td>{{ $user -> email }}</td>
						<td>.......</td>
						{{-- <td>
							<a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Edit</a>
						</td> --}}
						<td>
							<form action="{{ route('user.destroy',$user->id) }}" method="user">
								<input type="hidden" name="_method" value="DELETE">
								@csrf
								<button class="btn btn-danger">Hapus</button>
							</form>
						</td>
					</tr>
						@endforeach						
				</tbody>
			</table>
		</div>
			
		</div>
	</div>
</div>
@endsection