/* Retina images */
if(window.devicePixelRatio >= 1.2){
	if(window.devicePixelRatio >= 2.2){
	    var images = document.getElementsByTagName('img');
	    for(var i=0;i < images.length;i++){
	        var attr = images[i].getAttribute('data-3x');
	        if(attr){
	            images[i].src = attr;
	        }
	    }
	}
    var images = document.getElementsByTagName('img'); 
    for(var i=0;i < images.length;i++){
        var attr = images[i].getAttribute('data-2x');
        if(attr){
            images[i].src = attr;
        }
    }
}