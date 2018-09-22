

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
    smoothHeight: true,
    before: function(slider) {
    $(slider).resize();
      },

    after: function(slider) {
    $(slider).resize();
    },
        start: function(slider){
          $('body').removeClass('loading');
        },


      });
    });
  </script>

