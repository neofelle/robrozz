<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="slider clear" style="position: relative;bottom: 0px;">
    <div class="large-12 columns">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =44 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <div class="owl-carousel owl-1 owl-theme">
            <?php foreach( $slider_images as $i ){ ?>
               <div class="item slider-bg" style="height:500px;display: block;background-size:cover;background-image: url('<?php echo $i->guid; ?>')">   
                    <div class="container owl-slider owl-content">
                        <div class="row banner center">  
                          <?php echo $i->post_excerpt; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>  
<section class="services clear" style="">
  <div class="container home">
    <h2 class="uppercase">Well Pump Services - Installation - Repair - Inspections</h2>
    <br/>
    <div class="row">
      <?php    
          $args = array(
          'post_type' => 'cpt_services',
          'posts_per_page' => 3,
          'order' => 'ASC'
          );
           
          $the_query = new WP_Query( $args );
           
          if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
          $the_query->the_post();
          $cf_excerpt = get_post_meta($post->ID, 'services_excerpt', $single);            
      ?>

          <?php 
              $image = "";
              if (has_post_thumbnail( $post->ID ) ){
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
              }
          ?>

          <div class="col-md-4 service left">
            <a href="<?php echo $post->guid; ?>">
              <img class="cover" src="<?php echo $image[0]; ?>">
              <h2><?php echo get_the_title(); ?></h2>
              <p><?php echo $cf_excerpt; ?></p>
            </a>
          </div>

      <?php
          }
          } else {
          // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();         
      ?>
    </div>
    <br class="clear"><br/>
    <div class="row">
       <div class="col-md-6 left service-area">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-1') ) : ?>
          <?php endif; ?>
      </div>
      <div class="col-md-6 service-area left">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-2') ) : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>