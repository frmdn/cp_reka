setInterval(function(){
	
	if(
		!document.getElementById("photo_ifr") ||
		!document.getElementById("photo_ifr").contentWindow.document.getElementsByTagName('html') ||
		!document.getElementById("photo_ifr").contentWindow.document.getElementsByTagName('html')[0].getElementsByTagName('body')
	
	){
		return;
	}
	
	if(document.getElementById("photo_ifr")
		.contentWindow.document.getElementsByTagName('html')[0]
		.getElementsByTagName('body')[0])
		
	{
		var url = document.getElementById("photo_ifr")
			.contentWindow.document.getElementsByTagName('html')[0]
			.getElementsByTagName('body')[0]
			.innerHTML;
			
		if(url.indexOf(".jpg")>0 ||
		   url.indexOf(".jpeg")>0 ||
		   url.indexOf(".png")>0 ||
		   url.indexOf(".gif")>0 ){
			
			app.photo = "./uploads/" + url;
			console.log(app.photo);
			
			
		}
	}
	
},300);