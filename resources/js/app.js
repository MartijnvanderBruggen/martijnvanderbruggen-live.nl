require('./bootstrap');
import '../demo1/tools/webpack/vendors/global';
import '../demo1/tools/webpack/scripts';
window.Vue = require('vue');

const app = new Vue({
    el: '#app',   
});


$(document).ready(() =>{
	$('#login').on('click', () => {
		let url ="/logout";
		$.ajax({
			url: url,			
			method: get,
			
		});
	});	
	
	$('#registerlink').on('click', function(){
		event.preventDefault();
		$('#kt_wrapper .container').load('/register');
	});
});