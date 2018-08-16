var base_url = 'https://rekasys.com/';
var localhost_url = 'http://localhost/public_html/';

if(window.location.href.indexOf("localhost")>0){
	base_url = localhost_url;
}