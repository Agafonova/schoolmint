    /*jQuery(function () {

      jQuery('#main-nav').tinyNav({
        header: 'Navigation' // Writing any title with this option triggers the header
      });

    });

    jQuery( document ).ready(function() {

       jQuery('.menu-item-has-children').click( function() {

	 console.log ('1111');

       })
});
*/


     jQuery( document ).ready(function() {

     var popUpCounter = 0;
     var popUpTr = 1;

       window.onscroll = function() {
         popUpTr = 0;
         console.log('test');
       };
       window.onclick = function() {
         popUpTr = 0;
         console.log('test');
       };

     })