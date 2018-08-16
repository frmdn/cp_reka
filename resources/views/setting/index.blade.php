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
      <li class="active">Settings</li>
    </ul>
    <!-- END BREADCRUMB -->
    <!-- PAGE CONTENT WRAPPER -->
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h4><span class=""></span>Create Post</h4>
      </div>

    </div>
    <div class="card">
      <div class="col-md-8 mx-auto">
        @foreach($settings as $item)
        <form action="/settings/submit/{{ $item->id }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $item->name }}">
          </div>
          <div class="form-group">
            <label for="title">Description</label>
            <textarea style="height: 250px" name="description" class="form-control">{{ $item->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="title">Logo</label>
            <input type="file" name="logo" class="form-control">
          </div>
          <div class="form-group">
            <label for="title">Company</label>
            <input type="text" name="company" class="form-control" value="{{ $item->company }}">
          </div>
          <div class="form-group">
            <label for="title">Address</label>
            <textarea style="height: 250px" name="address" class="form-control">{{ $item->address }}</textarea>
          </div>
          <div class="form-group">
            <label for="title">Phone</label>
            <input type="number" name="phone" class="form-control" value="{{ $item->phone }}">
          </div>
          <div class="form-group">
            <label for="title">Hp</label>
            <input type="number" name="hp" class="form-control" value="{{ $item->hp }}">
          </div>
          <div class="form-group">
            <label for="title">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $item->email }}">
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
        </form>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection
