@extends('page.layout')
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
			<li class="active">View</li>
		</ul>
		<!-- END BREADCRUMB -->
		<!-- PAGE CONTENT WRAPPER -->
		<div class="row">
			<h4><span class=""></span>Detail {{ $data->title }}</h4>
		</div>
		<div class="col">
			<div class="card">


			<table>
				<tbody>
					<tr>
						<td>Title</td>
						<td>:</td>
						<td>{{ $data->title }}</td>
					</tr>
					<tr>
						<td>Description</td>
						<td>:</td>
						<td>{{ $data->description }}</td>
					</tr>
					<tr>
						<td>Created at</td>
						<td>:</td>
						<td>{{ $data->created_at }}</td>
					</tr>
					<tr>
						<td>Updated At</td>
						<td>:</td>
						<td>{{ $data->updated_at }}</td>
					</tr>
				</tbody>
			</table>

			</div>
                            
         </div>
     </div>                    
                    
                </div>
			
		</div>
	</div>
</div>


@endsection