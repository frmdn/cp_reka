<ul >
	<li><a href="{{ url('home') }}"><span class="fa fa-desktop"></span><span class="xn-text">Dashboard</span></a></li>
	<li><a href="#"><span class="fa fa-tags"></span><span class="xn-text">Master Pages</span></a>
	<ul>
		<li><a href="{{ url('page') }}"><span style="padding: 0 20px"></span><span class="xn-text">List Page</span></a></li>
		<li><a href="{{ url('page/create') }}"><span style="padding: 0 20px"></span><span class="xn-text">Create Page</span></a></li>
	</ul>
</li>
<li><a href="#"><span class="fa fa-tags"></span><span class="xn-text">Master Posts</span></a>
<ul>
	<li><a href="{{ url('post') }}"><span style="padding: 0 20px"></span><span class="xn-text">List Post</span></a></li>
	<li><a href="{{ url('post/create') }}"><span style="padding: 0 20px"></span><span class="xn-text">Create Post</span></a></li>
</ul>
</li>
<li><a href="#"><span class="fa fa-users"></span><span class="xn-text">Master Users</span></a>
<ul>
<li><a href="{{ url('user') }}"><span style="padding: 0 20px"></span><span class="xn-text">List User</span></a></li>

</ul>
</li>
<li><a href="/settings"><span class="fa fa-warning"></span><span class="xn-text">Settings</span></a></li>
<li><a href="/logout"><span class="fa fa-warning"></span><span class="xn-text">Logout</span></a></li>
</ul>
