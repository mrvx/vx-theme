<?php  $args = array(
  'post_type' => 'slaidid',
  'posts_per_page' => 10,
  'orderby'=>'post_date',
  'order'=>'DESC'
  ); ?>

<?php 

// The Query
$the_query = new WP_Query( $args ); ?>

<div class="slider-container owl-carousel">
  <?php // The Loop
  if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
      $the_query->the_post();  ?>

      <div class="item owl-img full-width" style="background-image: url('<?php the_field("pilt");?>');"></div>
      


      <?php // var_dump(get_fields()); ?>




      <?php } } else {
    // no posts found
      }  ?>
    </div>

    <?php
    /* Restore original Post Data */
    wp_reset_postdata(); ?>

