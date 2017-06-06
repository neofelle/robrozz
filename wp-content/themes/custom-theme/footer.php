<!-- Modal Form -->
<div class="form-home" style='display:none'>
    <div id='inline_content' style='padding:0px; background:#fff;'>
       <div style=" background-color: #2d8dbf;" class="center modal-container">
          <h1 style="padding-bottom: 10px;">CALL NOW!</h1>
       </div>
       <div style="padding-top: 35px;padding-bottom: 35px;background-image: url('<?php echo get_template_directory_uri() . "/assets/images/home/modal-content.png"; ?>');background-size: cover;background-position: center;" class="center">
          <a href="#"><i class="fa fa-phone color-white contact-modal" aria-hidden="true"></i></a>
       </div>
        <?php                   
        $header_number    = $GLOBALS['cgv']['default-contact-number'];
        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
        if( $cf_header_number != "" ){
          $header_number = $cf_header_number; 
        }
        ?>  
       <div class="modal-container"> 
         <h2 class="center"><?php echo $header_number; ?></h2>
         <h3 class="center">24/7 Service</h3>
       </div>
    </div>
</div>
<section class="banner-2 clear" style="background-color: white;">
    <div class="col-md-12" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/home/banner-2.png"; ?>');background-size: cover;background-position: center;">
        <div class="banner-b center" style="">
          <h1 class="color-white uppercase">Call us for a free evaluation.</h1>
          <p class="uppercase">We would love to help you with any of your plumbing needs or if you would just like better tasting, cleaning water!</p>
          <br class="clear">
          <a href="#" class="uppercase" style="font-weight:600 !important;">Call Us Now!</a>
        </div>
    </div>
</section>
<section class="footer clear" style="background-color:#ffffff;">
    <div class="container footer-container">
        <div class="col-md-4 footer-content left center">
            <h4 class="bold uppercase title">services</h4>
            <?php 
              $v = 0;
              $menuargs = array(
                "theme_location" => "primary",
                "menu_class" => "s-menu",
                "menu_id" => "footer-a",
              );
              $items = wp_get_nav_menu_items( 'footer-a', $menuargs); 
            ?> 
            <?php foreach( $items as $item ){ ?>
               <a hre="<?php echo $item->url; ?>"><p class="bold"><?php echo $item->title; ?></p></a>
            <?php } ?>
        </div>        
        <div class="col-md-5 footer-content left center">
            <div class="footer-logo">
              <a href="<?php echo get_option('home'); ?>">
                <?php the_custom_logo(); ?>
              </a>
            </div>
            <br class="clear">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
              <?php endif; ?>
            <div class="col-md-12 social-media">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div>            
        </div>
        <div class="col-md-3 footer-content left center" style="border-right: none !important;">
            <h4 class="bold uppercase title">CONTACT</h4>
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
              <?php endif; ?>
            <?php                   
            $header_number    = $GLOBALS['cgv']['default-contact-number'];
            $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
            if( $cf_header_number != "" ){
              $header_number = $cf_header_number; 
            }
            ?>  
            <p class="bold"><?php echo $header_number; ?></p>
        </div>
    </div>
</section>
<section class="social-media" style="background-color: #151f2d;">
  <div class="container" style="padding-top: 10px;padding-bottom: 4px;">
    <div class="col-md-12 left center copyright-container" style="padding-top: 5px; width: 100%;">
          <p class="copyright" style="color: white;font-weight: 400;font-size: 15px;">©2017 Plumbing Website – All Rights Reserved. – All Rights Reserved.</p>
    </div>

  </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.colorbox-min.js"></script>
<script>
  $(".inline").colorbox({inline:true, width:"95%", maxWidth:'600px'});
  $(document).ready(function() {
    $('.owl-1').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      margin: 10,
      dots: true,
      autoHeight: false
    });
  })
</script>
</body>
</html> 