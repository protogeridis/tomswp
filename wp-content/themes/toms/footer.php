<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php $rooturl = get_template_directory_uri(); ?>

<?php wp_footer(); ?>

<script src="<?php echo $rooturl; ?>/js/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="<?php echo $rooturl; ?>/js/vendor/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo $rooturl; ?>/js/waypoints.min.js"></script>
<script src="<?php echo $rooturl; ?>/js/bxslider/jquery.bxslider.js"></script>
<script src="<?php echo $rooturl; ?>/js/jquery.sheetrock.js"></script>

<!-- jlocator is based on jplist plugin: http://jplist.no81no.com -->
<script src="<?php echo $rooturl; ?>/js/jplist.min.js"></script>  

<!-- jlocator -->   
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places,geometry"></script>
<script src="<?php echo $rooturl; ?>/js/jlocator.min.js"></script>
<script src="<?php echo $rooturl; ?>/js/main.js"></script>






<script>


jQuery(document).ready(function() {
    // Animate Cloud Loop //
    function cloud_loop($target, val){        
      $target.animate({'background-position' : val+'px'}, 'fast', 'linear', function(){             
        cloud_loop($target, val+10);
      });
    }

    // Start Animation Loop //
    cloud_loop(jQuery('.giving-mosaic'), 1);
  });

</script>

</body>
</html>