<?php get_header(); ?>
<br class="clear" /><br/> 
<section class="page-section">
    <div class="container">
        <div class="col-md-12" style="padding-left: 40px;margin-top: 30px;">
            <h1 class="uppercase page-title"><?php the_title();?></h1>
        </div>
        <div class="col-md-8 left page-content">
            <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/page/content', 'page' );
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.


            ?>
        </div>
        <div class="col-md-4 left quote center" style="background-image: url('<?php echo get_template_directory_uri() . "/assets/images/inner/quote-form.png"; ?>');background-size: cover;background-position: center;padding: 55px;">
            <h2 class="color-white">CONTACT US</h2>
            <?php                   
            $header_number    = $GLOBALS['cgv']['default-contact-number'];
            $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
            if( $cf_header_number != "" ){
              $header_number = $cf_header_number; 
            }
            ?>  
            <h1 class="color-white"><?php echo $header_number; ?></h1>
        </div>
    </div>
 </section>
<?php get_footer(); ?>