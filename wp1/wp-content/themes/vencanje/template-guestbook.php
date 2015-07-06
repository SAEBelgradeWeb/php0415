<?php 
/*
* Template name: Guestbook
*/

get_header();
?>
<!-- BEFORE CONTENT -->
<div id="outerbeforecontent">
  <div class="container">
    <div class="row">
      <div id="beforecontent" class="twelve columns">
        <div id="pagetitle-container">
          <h1 class="pagetitle"><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END BEFORE CONTENT -->

<!-- MAIN CONTENT -->
<div id="outermain">
  <div class="container">
    <div class="row">

      <section id="maincontent" class="nine columns positionleft">

        <section class="content">


          <?php 
                // WP_Query arguments
          $args = array (
            'category_name' => 'guestbook',
        //'order' => 'ASC'
            );
                // The Query
          $query = new WP_Query( $args );

                // The Loop
          if ( $query->have_posts() ) {
           while ( $query->have_posts() ) {
            $query->the_post();
            ?>
            <div class="testimonial">
              <div class="box-testi">
                <div class="img">
                  <div class="avatar circle">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
                <div class="text">
                  <p><?php the_content(); ?></p>

                  <div class="author">
                    <div class="user"><?php the_author(); ?></div>
                    <div class="date"><?php echo get_the_date(); ?> @ <?php the_time('g:i a'); ?></div>                                           
                  </div>
                </div>
              </div>
            </div>
            <div class="separator"></div>
            <?php
          }
        } else {
    // no posts found
        }
    // Restore original Post Data
        wp_reset_postdata();
        ?>




      </section>

    </section>

    <?php get_sidebar(); ?>
  </div>
</div>
</div>
<!-- END MAIN CONTENT -->




<?php 

get_footer();

?>