<!-- START DASHBOARD CHART -->
					<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
					<div class="block-full-width">
                                                                       
                    </div>                    
                    <!-- END DASHBOARD CHART -->
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
	<div class="mb-container">
		<div class="mb-middle">
			<div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
			<div class="mb-content">
				<p>Are you sure you want to log out?</p>
				<p>Press No if youwant to continue work. Press Yes to logout current user.</p>
			</div>
			<div class="mb-footer">
				<div class="pull-right" id="lapp">
					<a href="{{ url('/logout') }}" @click="logout" class="btn btn-success btn-lg">Yes</a>
					<button class="btn btn-default btn-lg mb-control-close">No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="{{ URL::asset('adm/audio/alert.mp3') }}" preload="auto"></audio>
<audio id="audio-fail" src="{{ URL::asset('adm/audio/fail.mp3') }}" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="{{ URL::asset('adm/js/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('adm/js/plugins/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('adm/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type="text/javascript" src="{{ URL::asset('adm/js/plugins/icheck/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('adm/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('adm/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<!-- END PAGE PLUGINS -->


<script type="text/javascript" src="{{ URL::asset('adm/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('adm/js/actions.js') }}"></script>


@yield('scripts')


</div>
<!-- END PAGE CONTENT -->

</div>
<!-- END PAGE CONTAINER -->
    


</body>
</html>				