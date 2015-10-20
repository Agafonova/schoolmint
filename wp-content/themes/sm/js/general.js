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


    jQuery(document).ready(function () {

      var popUpCounter = 0;
      var popUpCounterScroll = 0;
      var Tr = 1;
      var Sc = 0;
      var stop = 0;

      window.onscroll = function () {
        Tr = 0;
        Sc = 1;
      };
      window.onclick = function () {
        Tr = 0;
      };

      function runPopUp() {
        console.log ( popUpCounter , popUpCounterScroll )

        if (popUpCounter > 60 || popUpCounterScroll > 4) {
          stop = 1;
          jQuery('#myModal').modal('show');

        }

        if (Tr == 1) popUpCounter++;
        if (Sc == 1) popUpCounterScroll++;

      }

      function run() {
        if (stop == 0) {
          runPopUp();
          setTimeout(run, 1000);
        }
      }

      setTimeout(run, 1000)

    })