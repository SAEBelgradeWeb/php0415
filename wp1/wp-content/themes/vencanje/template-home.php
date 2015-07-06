<?php 
/*
* Template name: Home
*/

get_header();
?>


<!-- SLIDER -->
<div id="outerslider">
   <div class="container">
    <div class="row">
       <div id="slidercontainer" class="twelve columns">

           <section id="slider">
            <div id="slideritems" class="flexslider">
                <ul class="slides">

                    <?php 
                // WP_Query arguments
                    $args = array (
                       'post_type' => 'slider'
                       );

                // The Query
                    $query = new WP_Query( $args );

                // The Loop
                    if ( $query->have_posts() ) {
                       while ( $query->have_posts() ) {
                          $query->the_post();
                          ?>
                          <li>
                            <?php the_post_thumbnail('slider'); ?>
                            <div class="flex-caption">
                                <h1><?php the_title(); ?></h1>
                                <?php the_content() ?>            
                            </div>
                        </li>




                        <?php
                    }
                } else {
	// no posts found
                }

// Restore original Post Data
                wp_reset_postdata();

                ?>



            </ul>
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider-shadow.png" alt="" />
        </div>
    </section>

</div>
</div>
</div>
</div>
<!-- END SLIDER -->


<!-- MAIN CONTENT -->
<div id="outermain">
   <div class="container">
    <div class="row">
       <section id="maincontent" class="twelve columns">

        <section class="content">

            <div class="highlight-content">
             <h1> We're getting married August 18, 2013</h1>
         </div>

         <div id="featured" class="row">
            <?php 
                // WP_Query arguments
            $args = array (
                'category_name' => 'home-teasers',
                'order' => 'ASC'
               );
                // The Query
            $query = new WP_Query( $args );

                // The Loop
            if ( $query->have_posts() ) {
               while ( $query->have_posts() ) {
                  $query->the_post();
                  ?>
                  <div class="one_third columns">
                      <?php the_post_thumbnail(); ?>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_content(); ?></p>
                  </div>
                  <?php
              }
          } else {
    // no posts found
          }
// Restore original Post Data
          wp_reset_postdata();
          ?>

      </div>


      <div class="separator"></div>

      <div class="row">

      <?php 
                // WP_Query arguments
            $args = array (
                'pagename' => 'about-miranda'
               );
                // The Query
            $query = new WP_Query( $args );

                // The Loop
            if ( $query->have_posts() ) {
               while ( $query->have_posts() ) {
                  $query->the_post();
                  ?>
        <div class="one_half columns">
           <div class="frame10 circle">
              <?php the_post_thumbnail(); ?>
           </div>
           <div class="indentleft">
               <h3 class="title"><?php the_title(); ?></h3>
               <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
           </div>
       </div>
                  <?php
              }
          } else {
    // no posts found
          }
// Restore original Post Data
          wp_reset_postdata();
          ?>

           <?php 
                // WP_Query arguments
            $args = array (
                'pagename' => 'about-michael'
               );
                // The Query
            $query = new WP_Query( $args );

                // The Loop
            if ( $query->have_posts() ) {
               while ( $query->have_posts() ) {
                  $query->the_post();
                  ?>
        <div class="one_half columns">
           <div class="frame10 circle">
              <?php the_post_thumbnail(); ?>
           </div>
           <div class="indentleft">
               <h3 class="title"><?php the_title(); ?></h3>
               <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="button">Read more <span></span></a>
           </div>
       </div>
                  <?php
              }
          } else {
    // no posts found
          }
// Restore original Post Data
          wp_reset_postdata();
          ?>
   </div> 


</section>

</section>
</div>
</div>
</div>
<!-- END MAIN CONTENT -->



<?php 

get_footer();

?>