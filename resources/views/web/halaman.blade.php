@extends('layouts/home')
@section('content')
<div class="container">
	<h1> {{ $datadetail->title }} </h1>
	<p>{{ $datadetail->body }}</p>
</div>
@endsection
