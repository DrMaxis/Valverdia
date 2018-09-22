

<script src="{{asset('js/inc/flexslider/flexslider.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.flexslider').flexslider({
    animation: "fade",
		slideshow: true,
		randomize: true,
		pauseOnHover: true,
		touch: true,
		initDelay: 2500,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>