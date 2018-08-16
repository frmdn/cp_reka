var app = new Vue({
	el: "#root",
	data: {
		showingAddModal: false,
		showingEditModal: false,
		showingDeleteModal: false,
		errorMessage: "",
		successMessage: "",
		settings: [],
		newSetting: {name: "", des: ""},
		clickedSetting: {}
	},

	mounted: function(){
		console.log("mounted");
		this.getAllSettings();
	},

	methods: {
		getAllSettings: function(){
			axios.get("http://hariskasman.com/reka/api/setting/api.php?action=read")
			.then(function(response){
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.settings = response.data.settings;
				}
			});
		},

		saveSetting: function(){
			//console.log(app.newSetting);
			var formData = app.toFormData(app.newSetting);

			axios.post("http://hariskasman.com/reka/api/setting/api.php?action=create", formData)
			.then(function(response){
				
				app.newSetting = {name: "", des: ""};

				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.getAllSettings();
				}
			});
		},

		updateSetting: function(){
			//console.log(app.newSetting);
			var formData = app.toFormData(app.clickedSetting);

			axios.post("http://hariskasman.com/reka/api/setting/api.php?action=update", formData)
			.then(function(response){				
				app.clickedSetting = {};
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.successMessage = response.data.message; 
					app.getAllSettings();
				}
			});
		},

		deleteSetting: function(){
			//console.log(app.newSetting);
			var formData = app.toFormData(app.clickedSetting);

			axios.post("http://hariskasman.com/reka/api/setting/api.php?action=delete", formData)
			.then(function(response){				
				app.clickedSetting = {};
				if(response.data.error){
					app.errorMessage = response.data.message; 
				} else{
					app.successMessage = response.data.message; 
					app.getAllSettings();
				}
			});
		},

		selectSetting(setting){
			app.clickedSetting = setting;
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