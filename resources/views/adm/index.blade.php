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
        <div class="page-content">
            
            
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
            <div class="page-content-wrap">
                
                <!-- START WIDGETS -->
                <div class="row">
                    <div class="col-md-3">
                        
                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                            <div class="widget-item-left">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">48</div>
                                <div class="widget-title">New messages</div>
                                <div class="widget-subtitle">In your mailbox</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->
                        
                    </div>
                    <div class="col-md-3">
                        
                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                            <div class="widget-item-left">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">48</div>
                                <div class="widget-title">New messages</div>
                                <div class="widget-subtitle">In your mailbox</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->
                        
                    </div>
                    <div class="col-md-3">
                        
                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">375</div>
                                <div class="widget-title">Registred users</div>
                                <div class="widget-subtitle">On your website</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->
                        
                    </div>
                    <div class="col-md-3">
                        
                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-info widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="#"><span class="fa fa-clock-o"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-bell"></span></a>
                                </div>
                                <div class="col">
                                    <a href="#"><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET CLOCK -->
                        
                    </div>
                </div>
                <!-- END WIDGETS -->
                
                <div class="row">
                    <div class="col-md-4">
                        
                        
                        
                    </div>
                    <div class="col-md-4">
                        
                        <!-- START PROJECTS BLOCK -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Projects</h3>
                                    <span>Projects activity</span>
                                </div>
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body panel-body-table">
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="50%">Project</th>
                                                <th width="20%">Status</th>
                                                <th width="30%">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Presisi Admin</strong></td>
                                                <td><span class="label label-danger">Developing</span></td>
                                                <td>
                                                    <div class="progress progress-small progress-striped active">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Gemini</strong></td>
                                                <td><span class="label label-warning">Updating</span></td>
                                                <td>
                                                    <div class="progress progress-small progress-striped active">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Taurus</strong></td>
                                                <td><span class="label label-warning">Updating</span></td>
                                                <td>
                                                    <div class="progress progress-small progress-striped active">
                                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Leo</strong></td>
                                                <td><span class="label label-success">Support</span></td>
                                                <td>
                                                    <div class="progress progress-small progress-striped active">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Virgo</strong></td>
                                                <td><span class="label label-success">Support</span></td>
                                                <td>
                                                    <div class="progress progress-small progress-striped active">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END PROJECTS BLOCK -->
                        
                    </div>
                </div>
                
                @include ('adm.foot')