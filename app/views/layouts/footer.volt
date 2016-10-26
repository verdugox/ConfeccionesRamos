<!-- START SCRIPTS -->
    <!-- START PLUGINS -->

    {{ javascript_include("js/jquery.min.js") }}
    {{ javascript_include("js/bootstrap.min.js") }}
    {{ javascript_include("js/jquery.prettyPhoto.js") }}
    {{ javascript_include("js/jquery.nicescroll.min.js") }}
    {{ javascript_include("js/superfish.min.js") }}
    {{ javascript_include("js/jquery.flexslider-min.js") }}
    {{ javascript_include("js/owl.carousel.js") }}
    {{ javascript_include("js/jquery.BlackAndWhite.js") }}
    {{ javascript_include("js/myscript.js") }}

  	<script>

  		//PrettyPhoto
  		jQuery(document).ready(function() {
  			$("a[rel^='prettyPhoto']").prettyPhoto();
  		});

  		//BlackAndWhite
  		$(window).load(function(){
  			$('.client_img').BlackAndWhite({
  				hoverEffect : true, // default true
  				// set the path to BnWWorker.js for a superfast implementation
  				webworkerPath : false,
  				// for the images with a fluid width and height
  				responsive:true,
  				// to invert the hover effect
  				invertHoverEffect: false,
  				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
  				intensity:1,
  				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
  					fadeIn: 300, // 200ms for fadeIn animations
  					fadeOut: 300 // 800ms for fadeOut animations
  				},
  				onImageReady:function(img) {
  					// this callback gets executed anytime an image is converted
  				}
  			});
  		});

  	</script>





<!-- END SCRIPTS -->
