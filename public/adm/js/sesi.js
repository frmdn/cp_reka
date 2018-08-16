const lm = new Vue({
	el: '#lapp',
	data: {
		name: ""
	},
	methods: {
		logout: function(){
			window.location.href = `${base_url}api/user/logout.php`;
		}
	}
});

var hm = new Vue({
	el: '#headerApp',
	data: {
		name: '',
		hp:'',
		tes:'',
		namaku:'',
		photo: 'img/avatar.png',
		jabatan: 'jabatan'
	},
	mounted: function() {
		this.loadSettings();
		this.sesiSettings();
		
		
	},
	methods: {
		loadSettings: function() {
			axios({
				method: 'post',
				url: `${base_url}api/setting/read.php`
			}).then(function(response) {
				var data = response.data["data"][0];
				hm.name = data.name;
				hm.hp = response.data["data"][0]["hp"];
			}).catch(function(error) {
				console.log(error);
			});
		},
		sesiSettings: function() {
			axios({
				method: 'post',
				url: `${base_url}api/user/check_session.php`
			}).then(function(response) {
				hm.namaku = response.data.name;
				hm.photo = response.data.photo;
				hm.jabatan = response.data.jabatan;

				switch(hm.jabatan){
					case "Super Admin":
						hm.tes = "<li><a href='home.php'><span class='fa fa-desktop'></span><span class='xn-text'>Dashboard</span></a></li>" + 
						"<li><a href='pages.php'><span class='fa fa-pencil'></span><span class='xn-text'>Master Pages</span></a></li>" + 
						"<li><a href='posts.php'><span class='fa fa-tags'></span><span class='xn-text'>Master Posts</span></a></li>" + 
						"<li><a href='users.php'><span class='fa fa-users'></span><span class='xn-text'>Master Users</span></a></li>" + 
						"<li><a href='settings.php'><span class='fa fa-warning'></span><span class='xn-text'>Settings</span></a></li>";
						break;
					case "Admin":
						hm.tes = "<li><a href='home.php'><span class='fa fa-desktop'></span><span class='xn-text'>Dashboard</span></a></li>" + 
						"<li><a href='pages.php'><span class='fa fa-pencil'></span><span class='xn-text'>Master Pages</span></a></li>" + 
						"<li><a href='posts.php'><span class='fa fa-tags'></span><span class='xn-text'>Master Posts</span></a></li>" + 
						"<li><a href='users.php'><span class='fa fa-users'></span><span class='xn-text'>Master Users</span></a></li>" + 
						"<li><a href='settings.php'><span class='fa fa-warning'></span><span class='xn-text'>Settings</span></a></li>";
						hm.disableAnotherUserModifier();
						break;
					case "Kontributor":
						hm.tes = "<li><a href='home.php'><span class='fa fa-desktop'></span><span class='xn-text'>Dashboard</span></a></li>" + 
							"<li><a href='posts.php'><span class='fa fa-tags'></span><span class='xn-text'>Master Posts</span></a></li>" + 
							"<li><a href='users.php'><span class='fa fa-users'></span><span class='xn-text'>Master Users</span></a></li>";
							hm.disableAnotherUserModifier();
						break;
				}

			}).catch(function(error) {
				console.log(error);
			});
		},
		disableAnotherUserModifier: function(){

			if(window.location.href.indexOf("users.php")>-1){

				if(document.getElementById("crudAddBtn")){
					document.getElementById("crudAddBtn").style.display = "none";
				}
	
				setInterval(function(){
					var x = document.getElementsByClassName("btn-danger");
					for(var i=0;i<x.length;i++){
						x[i].style.display = "none";
					}
				},100);
	
				document.getElementById("email_control_container").style.display = "none";
				document.getElementById("jabatan_control_container").style.display = "none";
				document.getElementById("status_control_container").style.display = "none";

			}
			

		}
	}
});

axios({
	method: 'post',
	url: `${base_url}api/user/check_session.php`
})
.then(function (response) {
	if(response.data=="NOT_LOGGED_IN"){
		alert("kamu belum login!");
		window.location.href = "index.php";
		return;
	}
	lm.name = response.data;
}).catch(function (error) {
	console.log(error);
});