<?php /* STIKCY TEATED */ ?>




<!-- algus -->

<?php 
$sticky = get_option( 'sticky_posts' );
$args = array(
  'post_type' => 'tooted',
  'posts_per_page' => 10,
  'post__in'  => $sticky,
  'ignore_sticky_posts' => 1,
  'orderby'=>'date',
  'order'=>'DESC'
); ?>

<?php 

// The Query
$the_query = new WP_Query( $args );


  // The Loop
  if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
      $the_query->the_post(); 

if ( isset($sticky[0]) ) { ?>


				<?php $variable = get_field('toote_pilt', 'tooterubriik-cat_2'); ?>
				<?php $variable = get_field('toote_plaan', 'tooterubriik-cat_2'); ?>


				<div class="col-md-4 col-sm-6">
					<a href="<?php echo get_permalink(); ?>" class="item">

						<span class="details">
							<span class="plan" style="background-image: url('<?php the_field("plaan"); ?>');"></span>

							<span href="<?php echo get_permalink(); ?>" class="btn secondary">Vaata rohkem <i class="fa fa-angle-right"></i></span>
						</span>
						<h3><?php the_title(); ?></h3>
						<span class="img" style="background-image: url('<?php the_field("toote_pilt"); ?>');"></span>


					</a>
				</div>


<?php } ?>

 






<?php }  } else {
    // no posts found
  } 

/* Restore original Post Data */
wp_reset_postdata(); ?>

<!-- Lopp -->
