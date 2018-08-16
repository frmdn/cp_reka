@extends('page.layout') @section('content')
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
      <h4><span class=""></span>List Page</h4>
    </div>
    <div class="col">
      <div class="card">

        @if(Session::has('alert-success'))
        <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong> @endif


        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Master Pages</h3>
            <ul class="panel-controls">
              <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
              <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
              <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
          </div>
          <div class="panel-body">
            <a href="{{ url('page/create') }}" class="btn btn-success">Create</a>
            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  {{-- <th>Id</th> --}}
                  <th>Title</th>
                  <th>Desciption</th>
                  <th>Pages</th>
                  <th>Sub Pages</th>
                  <th>Post</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp @foreach($data as $items)
                <tr>
                  <td>{{ $no++ }}</td>
                  {{-- <td>{{ $items -> id }}</td> --}}
                  <td>{{ $items -> title }}</td>
                  <td>{{ $items -> description }}</td>
                  <td>
                    @if ($items->halaman == 1) Halaman Utama @elseif ($items->halaman == 2) Header Sub @else Sub Halaman @endif
                  </td>
                  {{-- Ini untuk menampilkan Parent Page nya --}}
                  <td>{{ $items->subid->title }}</td>
                  {{-- Ini untuk menampilkan judul Posting --}}
                  <td>{{ $items->post->title }}</td>
                  <td>
                    <form action="{{ route('page.destroy', $items->id) }}" method="post">
                      {{ csrf_field() }} {{ method_field('DELETE') }}
                      <a href="{{ route('page.show',$items->id) }}" class="btn btn-warning">View</a>
                      <a href="{{ route('page.edit',$items->id) }}" class="btn btn-primary">Edit</a>
                      <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- END DEFAULT DATATABLE -->


      </div>

    </div>
  </div>
</div>
@endsection
