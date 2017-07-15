<?php /*
/**
Template Name: Suured alad
   */


get_header(); ?>

<div id="content" class="full-width">

	<?php while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1>TEST TEST TEST</h1>
			<?php
//var_dump(get_fields());
// check if the flexible content field has rows of data
			if( have_rows('suured-alad') ):

 	// loop through the rows of data
				while ( have_rows('suured-alad') ) : the_row();

		// check current row layout
			if( get_row_layout() == 'galerii' ): ?>
			<section id="<?php the_sub_field('id-1'); ?>" class="<?php the_sub_field('class'); ?>">	
				<div class="container no-pl no-pr m-b-defx2">

					<div class="acf-gallery flex wrap justify-space-between lightgalleryElegant">
						<?php $pildid = get_sub_field('pildid');

						foreach ($pildid as $image) { ?>

						<div class="col-sm-4 item" data-src="<?php echo $image['url']; ?>" data-sub-html="">
							<a href="<?php echo $image['url']; ?>" rel="prettyPhoto">

								<div class="image inline-block full-width" style="background-image:url('<?php echo $image["sizes"]["medium_large"]; ?>')"></div>
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</section>
			<?php
			endif; 

			if( get_row_layout() == 'sisu' ): ?>
			<section class="post-content <?php the_sub_field('klass'); ?>" id="<?php the_sub_field('id-2'); ?>">

				<div class="container p-t-defx2">
					<div class="acf-content">
						<?php the_sub_field('text'); ?>
					</div>
				</div>
			</section>

		<?php endif;
		if( get_row_layout() == '23_ja_13' ): ?>
		<section class="post-content <?php the_sub_field('klass'); ?>" id="<?php the_sub_field('id-2'); ?>">

			<div class="container">
				<div class="row">	
					<div class="acf-content">
						<div class="col-sm-9">
							<?php the_sub_field('kakskolmandikku'); ?>
						</div>
						<div class="col-sm-3">
							<?php the_sub_field('ukskolmandik'); ?>
						</div>
					</div>
				</div>
			</section>


			<?php
			endif;

			if( get_row_layout() == '13_13_13_tekst' ): ?>
			<section class="post-content <?php the_sub_field('class-1-3'); ?>" id="<?php the_sub_field('id-2'); ?>">

				<div class="container p-defx2">
					<div class="row">
						<div class="acf-content">
							<div class="col-sm-4">
								<?php the_sub_field('vasakpoolne'); ?>
							</div>
							<div class="col-sm-4">
								<?php the_sub_field('keskmine'); ?>
							</div>
							<div class="col-sm-4">
								<?php the_sub_field('parempoolne'); ?>
							</div>
						</div>
					</div>
				</section>


				<?php
				endif;

				if( get_row_layout() == 'full-image' ): ?>
				<section class="<?php the_sub_field('klass'); ?> no-padding full-image" id="<?php the_sub_field('id-3'); ?>">

					<div class="bg-img relative" style="background-image: url('<?php the_sub_field('full-img'); ?>'); 
						padding-bottom: <?php the_sub_field('pildi_korgus'); ?>%; background-position: <?php the_sub_field('pildi_joondus'); ?>;">

						<?php if(get_sub_field('sisutekst')) { ?>
						<div class="lead inline-block p-defx2 color-white normal absolute <?php the_sub_field('joondus'); ?>">
							<div class="innerText fz25 l1-2 normal">
								<?php the_sub_field('sisutekst'); ?>
							</div>
						</div>
						<?php } ?>

					</div>
				</section>



				<?php
				endif;

				endwhile;

				else :

					echo 'ei ole';
				endif;

				?>

				<!-- TEXT -->



				<div class="clearfix">	</div>
				<div class="p-defx2 full-width">	</div>
				
			

				<div class="post-content hide hidden">
					<?php the_content(); ?>
				</div>

			</div>
		<?php endwhile; ?>



	</div>
	<?php get_footer();?>