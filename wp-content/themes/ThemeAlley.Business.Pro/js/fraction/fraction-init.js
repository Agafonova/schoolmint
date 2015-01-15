jQuery(window).load(function(){
	jQuery.noConflict();
	jQuery('.fractionslider').fractionSlider({
		'fullWidth': 			true,
		'controls': 			true, 
		'pager': 				true,
		'responsive': 			true,
		'dimensions': 			"1150,500",
	    'increase': 			false,
		'pauseOnHover': 		true,
		'autoChange' : 			true,
		'timeout' : 10000,
	});

});