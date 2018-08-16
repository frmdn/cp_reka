@extends('layouts.app')
@section('stiles')
<link rel="shortcut icon" href="{{ URL::to('images/police.ico') }}" type="image/x-icon">

<link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- icon fonts font Awesome -->
<link href="{{ URL::to('css/font-awesome.min.css') }}" rel="stylesheet">
<!-- Import Custom Styles -->
<link href="{{ URL::to('css/style.css') }}" rel="stylesheet">
<!-- Import Animate Styles -->
<link href="{{ URL::to('css/animate.min.css') }}" rel="stylesheet">
<!-- Import Custom Responsive Styles -->
<link href="{{ URL::to('css/responsive.css') }}" rel="stylesheet">
<style type="text/css">
.alert {
color:#464037;
font-size:13px;
display:none;
border-radius:0;
}
.hakcipta {
font-size:12px;
text-align:center;
}
.btn-bhabin {
width:100%;
}
label {
font-size: 13px;
}
input.form-control {
border-radius: 0;
}
.site-banner {
display: block;
}
</style>
@endsection

@section('content')
 <div class="main-content blog-post-singgle-page">
    <div class="container">       
        <div class="row justify-content-center">
            <img class="site-banner" style="height: 85px;width: 250px" src="{{ URL::to('images/logo.png') }}" alt="">
        </div><br><br>
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div id="blog-post-content" class="blog-post-content">
                    <article class="post type-post">
                    <div class="post-top">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                    <label>Email </label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    
                                 @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                                      
                                </div>     
                            <button type="submit" class="btn btn-secondary" style="width: 100%">Login
                            </button>                            
                        </form>
                        <br>
                        <div class="hakcipta text-center">
                            Hak Cipta &copy; 2018 <br>
                            Rekasystem Technology
                        </div>
                    </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection