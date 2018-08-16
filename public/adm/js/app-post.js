var app = new Vue({
	el: "#root",
	data: {
		showingAddModal: false,
		showingEditModal: false,
		showingDeleteModal: false,
		errorMessage: "",
		successMessage: "",
		posts: [],
		newPost: {name: "", des: ""},
		clickedPost: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllPosts();
	},

	methods: {
		getAllPosts: function(){
			axios.get("http://hariskasman.com/reka/api/post/api.php?action=read")
			.then(function(response){
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.posts = response.data.posts;
				}
			});
		},

		savePost: function(){
			//console.log(app.newPost);
			var formData = app.toFormData(app.newPost);

			axios.post("http://hariskasman.com/reka/api/post/api.php?action=create", formData)
			.then(function(response){
				
				app.newPost = {name: "", des: ""};

				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.getAllPosts();
				}
			});
		},

		updatePost: function(){
			//console.log(app.newPost);
			var formData = app.toFormData(app.clickedPost);

			axios.post("http://hariskasman.com/reka/api/post/api.php?action=update", formData)
			.then(function(response){				
				app.clickedPost = {};
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.successMessage = response.data.message; 
					app.getAllPosts();
				}
			});
		},

		deletePost: function(){
			//console.log(app.newPost);
			var formData = app.toFormData(app.clickedPost);

			axios.post("http://hariskasman.com/reka/api/post/api.php?action=delete", formData)
			.then(function(response){				
				app.clickedPost = {};
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.successMessage = response.data.message; 
					app.getAllPosts();
				}
			});
		},

		selectPost(post){
			app.clickedPost = post;
		},

		toFormData: function(obj){
			var form_data = new FormData();
		      for ( var key in obj ) {
		          form_data.append(key, obj[key]);
		      } 
		      return form_data;
		},

		clearMessage: function(){
			app.errorMessage = "";
			app.successMessage = "";
		}
	}
});