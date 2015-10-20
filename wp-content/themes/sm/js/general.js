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
     var popUpCounterScroll = 0;
     var Tr = 1;
     var Sc = 0;
     var stop = 0;

       window.onscroll = function() {
         Tr = 0;
         Sc = 1;
       };
       window.onclick = function() {
         Tr = 0;
       };

       function runPopUp() {
         console.log (popUpCounter , popUpCounterScroll );

         if (stop == 1) return;

         if (popUpCounter > 60 || popUpCounterScroll > 20 ){
           console.log ('start_popUp');
           stop = 0;
           $('#myModal').modal('show');

         }

         if (Tr == 1) popUpCounter++;
         if (Sc == 1) popUpCounterScroll++;

       }

       setInterval(runPopUp , 1000);

     })