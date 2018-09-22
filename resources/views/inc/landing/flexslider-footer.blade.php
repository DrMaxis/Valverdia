

<script src="{{asset('js/inc/flexslider/flexslider.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.flexslider').flexslider({
    animation: "fade",
    animationSpeed: 500,
		slideshow: true,
		randomize: true,
		pauseOnHover: true,
    touch: true,
    keyboard: false,
    slideshowSpeed: 7000,
    controlNav: true,
   /*  before: function(slider) {
                $(slider).resize();
                $(slider).find('li').not('.flex-active-slide').removeClass('slide-hide');
            },
            after: function(slider) {
                $(slider).find('li').not('.flex-active-slide').addClass('slide-hide');
                $(slider).resize();
            }, */
            start: function(slider) {
              $('body').removeClass('loading');
                /* $(slider).find('li').not('.flex-active-slide').addClass('slide-hide'); */
            }  
       
      });
    });
  </script>

