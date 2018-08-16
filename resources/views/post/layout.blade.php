@include ('adm.head')
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        
        <div class="page-sidebar" id="headerApp">
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="home.php">PT Reka Sistem</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="" alt="Haris Kasman"/>
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="{{ URL::asset('adm/img/avatar.png') }}" v-bind:src="photo" alt="Haris Kasman" style="width: 94px;height: 94px;" />
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name">{{ Auth::user()->name }}</div>
                            <div class="profile-data-title">Programmer</div>
                        </div>
                        <div class="profile-controls">
                            <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                            <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
                <li class="xn-title">Navigation</li>
                @include('adm.nav')
            </ul>
        </div>
   
    @yield('content')        
    @include ('adm.foot')
    