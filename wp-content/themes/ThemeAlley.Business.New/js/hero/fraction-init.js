jQuery(window).load(function(){
	jQuery.noConflict();
	jQuery('.fractionslider').fractionSlider({
		'fullWidth': 			true,
		'controls': 			false, 
		'pager': 				false,
		'responsive': 			true,
		'dimensions': 			"1100,550",
	    'increase': 			false,
		'pauseOnHover': 		true,
		'autoChange' : 			false,
	});

});