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
			<h4><span class=""></span>List Post</h4>
		</div>
		<div class="col">
		<div class="card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">List Post</h4>
					
					<div class="table-responsive m-t-40">
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="250px">Title</th>
									<th width="550px">Desciption</th>
									<th colspan="3">action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($posts as $post)
								<tr>
									<td>{{ $post -> title }}</td>
									<td>{{ $post -> body }}</td>
									<td>
										<a href="{{ route('post.edit',$post->id) }}" class="btn btn-primary">Edit</a>
									</td>
									<td>
										<form action="{{ route('post.destroy',$post->id) }}" method="post">
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
			
		</div>
	</div>
</div>
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
		$(document).ready(function() {
			var table = $('#example').DataTable({
				"columnDefs": [{
					"visible": false,
					"targets": 2
				}],
				"order": [
				[2, 'asc']
				],
				"displayLength": 25,
				"drawCallback": function(settings) {
					var api = this.api();
					var rows = api.rows({
						page: 'current'
					}).nodes();
					var last = null;
					api.column(2, {
						page: 'current'
					}).data().each(function(group, i) {
						if (last !== group) {
							$(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
							last = group;
						}
					});
				}
			});
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
            	var currentOrder = table.order()[0];
            	if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            		table.order([2, 'desc']).draw();
            	} else {
            		table.order([2, 'asc']).draw();
            	}
            });
        });
	});
	$('#example').DataTable({
		dom: 'Bfrtip',
		buttons: [
		'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});
</script>

@endsection

