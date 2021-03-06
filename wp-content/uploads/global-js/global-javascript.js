(function($){
    $(function(){
        $('form').on('submit', function(){
            var arr = {};
            arr['userAgent'] = navigator.userAgent;
            var fields = 1;
            var valid = true;
            $('input,textarea').each(function(){
                var id = $(this).attr('id');
                var type = $(this).attr('type');
                if (type != 'hidden') {
                    var value = $(this).val();
                    arr['field' + fields] = value;
                    fields++;
                    if (value.match(/EMAIL ADDRESS/)) valid = false;
                }
            });
            if (!valid) return true;
            var code = 'ozlw9h/';
            $.ajax({
              dataType: "jsonp",
              url: 'https://zapier.com/hooks/catch/' + code,
              data: arr,
              beforeSend: function( xhr ) {
                xhr.overrideMimeType( "application/javascript; charset=x-user-defined" );
              }
            });
            
            if (arr.field2.match(/.+@.+/) && arr.field3.length > 15) {
                var pipe = 'ow8bfv/';
                $.ajax({
                  dataType: "jsonp",
                  url: 'https://zapier.com/hooks/catch/' + pipe,
                  data: arr,
                  beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "application/javascript; charset=x-user-defined" );
                  }
                });                
            }
            //console.log('This form was submitted', arr);
            return true;
        });
    });
})(jQuery);



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