<?php 
/*
* Template name: Blog
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
            'category_name' => 'blog',
        //'order' => 'ASC'
            );
                // The Query
          $query = new WP_Query( $args );

                // The Loop
          if ( $query->have_posts() ) {
           while ( $query->have_posts() ) {
            $query->the_post();
            ?>


            <article class="post">
              <div class="date-wrapper"> 
                <div class="line-date"></div>
                <div class="date-value"><?php the_time('j'); ?></div>
                <div class="month-value"><?php the_time('F'); ?></div>
              </div>
              <div class="postimg">
                <?php 

                $attr = array('class' => "frame");
                  ?>
                  <?php the_post_thumbnail('full',$attr); // treba da je klasa frame ?>

                </div>

                <div class="entry-content">
                  <h2 class="posttitle"><a href="single.html"><?php the_title(); ?></a></h2>
                  <div class="entry-utility">
                    Posted by <a href="#"><?php the_author(); ?></a>
                  </div>
                  <p><?php the_content(); ?></p>
                  <?php $link = get_permalink(); ?>
                  <a href="<?php echo $link; ?>" class="button">Read more <span></span></a>

                </div>

                <div class="clear"></div>
              </article>


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