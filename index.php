<?php 
get_header(); ?>
<div class="container" >
	<main class="row" id="main">


		<?php if( have_posts() ): the_post(); ?>
			<article class="col-md-12" id="page-<?php the_ID(); ?>" role="article">
				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</article>

		<?php endif; ?>
		
		
		

	</main>
</div>





<?php get_footer(); ?>


