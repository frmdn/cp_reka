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
			<li><a href="#">Tables</a></li>
			<li class="active">Data Tables</li>
		</ul>
		<!-- END BREADCRUMB -->
		<!-- PAGE CONTENT WRAPPER -->
		<div class="row">
			<div class="col-md-8 mx-auto">
			<h4><span class=""></span>Edit Post</h4>
			</div>
				
		</div>
		<div class="card">
			<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            @foreach($data as $datas)
                            <form class="form-horizontal" action="{{ route('page.update', $datas->id) }}" method="post">
								{{ csrf_field() }}
								{{ method_field('PUT') }}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit</strong> Form</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>Silahkan melakukan edit data agar data dapat terupdate dengan baik.</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Title</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="title" value="{{ $datas->title }}" class="form-control"/>
                                            </div>                                            
                                            <span class="help-block">This is the title</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="description" rows="5">{{ $datas->description }}</textarea>
                                            <span class="help-block">Description Area</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">No Urut</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="number" name="no_urut" class="form-control" value="{{ $datas->no_urut }}" >
                                            </div>                                            
                                            <span class="help-block">This is Sort Number</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Pages</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="halaman" class="form-control select">
												@foreach($data as $sort)
												 <option value="{{ $sort -> id }}">
												 @if ($sort->halaman == 1)
													Halaman Utama
												 @elseif ($sort->halaman == 2)
													Sub Halaman
												 @else
													Not Available
												 @endif
												 </option>
												@endforeach
												<option >-- Pilih --</option>
                                                <option value="1">Halaman Utama</option>
                                                <option value="2">Halaman Sub</option>
                                            </select>
                                            <span class="help-block">this is the sub page</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Sub Pages</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="sub_page" class="form-control select">
                                                <option value="{{ $datas->id }}" >{{ $datas->title }}</option>
												<option >-- Pilih --</option>
												@foreach($data as $items)
												<option value="{{ $items -> id }}" >{{ $items -> title }}</option>
												@endforeach
                                            </select>
                                            <span class="help-block">this is status pages</span>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Status</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select name="status" class="form-control select">
												@foreach($data as $statusku)
												<option value="1">
												@if ($statusku->status == 1)
													Aktif
												 @elseif ($statusku->status == 2)
													Non Aktif
												 @else
													Not Available
												 @endif
												</option>
												@endforeach
												<option >-- Pilih --</option>
                                                <option value="1">Aktif</option>
                                                <option value="0" >Non Aktif</option>
                                            </select>
                                            <span class="help-block">this is status pages</span>
                                        </div>
                                    </div>

                                </div>
								
								<div class="panel-footer">                                 
                                    <button class="btn btn-primary pull-right" type="submit" >Update</button>
								</div>	
									
                            </div>
                            </form>
							@endforeach
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->    
		</div>
	</div>
</div>
	@endsection