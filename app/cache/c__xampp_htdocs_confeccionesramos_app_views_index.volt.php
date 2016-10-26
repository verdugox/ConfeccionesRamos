<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Confecciones Ramos</title>

        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!-- START CSS -->
        <!-- CSS INCLUDE -->
<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
<?php echo $this->tag->stylesheetLink('css/flexslider.css'); ?>
<?php echo $this->tag->stylesheetLink('css/prettyPhoto.css'); ?>
<?php echo $this->tag->stylesheetLink('css/animate.css'); ?>
<?php echo $this->tag->stylesheetLink('css/owl.carousel.css'); ?>
<?php echo $this->tag->stylesheetLink('css/style.css'); ?>

<!-- FONTS -->
<?php echo $this->tag->stylesheetLink('css/font.css'); ?>
<?php echo $this->tag->stylesheetLink('css/font-awesome.css'); ?>
<!-- EOF CSS INCLUDE -->

        <!-- END CSS -->
        <!-- START SCRIPTS -->
        <!-- START SCRIPTS -->
    <!-- START PLUGINS -->

    <?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery.prettyPhoto.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery.nicescroll.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/superfish.min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery.flexslider-min.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/owl.carousel.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/jquery.BlackAndWhite.js'); ?>
    <?php echo $this->tag->javascriptInclude('js/myscript.js'); ?>

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

        <!-- END SCRIPTS -->
    </head>
    <body>
            <?php echo $this->getContent(); ?>
    </body>
</html>
