var app = new Vue({
	el: "#root",
	data: {
		showingAddModal: false,
		showingEditModal: false,
		showingDeleteModal: false,
		errorMessage: "",
		successMessage: "",
		pages: [],
		newPage: {name: "", des: ""},
		clickedPage: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllPages();
	},

	methods: {
		getAllPages: function(){
			axios.get("https://rekasys.com/api/page/api.php?action=read")
			.then(function(response){
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.pages = response.data.pages;
				}
			});
		},

		savePage: function(){
			//console.log(app.newPage);
			var formData = app.toFormData(app.newPage);

			axios.post("https://rekasys.com/api/page/api.php?action=create", formData)
			.then(function(response){
				
				app.newPage = {name: "", des: ""};

				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.getAllPages();
				}
			});
		},

		updatePage: function(){
			//console.log(app.newPage);
			var formData = app.toFormData(app.clickedPage);

			axios.post("https://rekasys.com/api/page/api.php?action=update", formData)
			.then(function(response){				
				app.clickedPage = {};
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.successMessage = response.data.message; 
					app.getAllPages();
				}
			});
		},

		deletePage: function(){
			//console.log(app.newPage);
			var formData = app.toFormData(app.clickedPage);

			axios.post("https://rekasys.com/api/page/api.php?action=delete", formData)
			.then(function(response){				
				app.clickedPage = {};
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.successMessage = response.data.message; 
					app.getAllPages();
				}
			});
		},

		selectPage(page){
			app.clickedPage = page;
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