<?php /*
/**
Template Name: Kastid pildiga
   */


get_header(); ?>


<div id="content" class="full-width">
		<?php while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			



			<div class="post-content">


				<div class="boxes flex wrap justify-space-between">

					<?php

					if( have_rows('kastid') ):

						while ( have_rows('kastid') ) : the_row(); ?>

					<?php $pealkiri = get_sub_field('pealkiri'); ?>
					<?php $sisutekst = get_sub_field('sisutekst'); ?>
					<?php $pilt = get_sub_field('pilt'); ?>
					<?php $link = get_sub_field('link'); ?>
					<?php $taustavarv = get_sub_field('kasti_taustavarv'); ?>


					<div class="one_fourth">
						<div class="kast-pealkirja-taust-1" style="background-color: <?php echo $taustavarv; ?>">
							<div class="kast-pealkiri p-l-def p-r-def">
								<?php echo $pealkiri; ?>
							</div>
						</div>
						<div class="kast-img" style="background-image: url('<?php echo $pilt['url']; ?>');">	</div>

						<div class="kast-sisu"><?php echo $sisutekst; ?>
							<?php if($link) { ?>
							<div class="read-more">
								<a href="<?php echo $link; ?>"><?php echo __('Loe rohkem', 'Avada'); ?></a>
							</div>
							<?php } ?>
						</div>

					</div>

					<?php
					endwhile;
					else :
						endif;
					?>
				</div>


				<div class="two_third">
					<div class="tere">
						<div class="esi-h1"></div>
						<?php the_field('teretulemast_tekst') ?>
					</div>
					<div><h2><?php the_field('poe_nimetus', 627) ?></h2></div>
					<div><?php the_field('oleme_avatud', 627) ?></div>
					<div><h2><?php the_field('kellaajad', 627) ?></h2></div>
					<div><?php the_field('lisainfo_est', 627) ?></div>
					<div><h2><?php the_field('poe_nimetus_eng', 627) ?></h2></div>
					<div><?php the_field('oleme_avatud_eng', 627) ?></div>
					<div><h2><?php the_field('kellaajad', 627) ?></h2></div>
					<div><?php the_field('lisainfo_eng', 627) ?></div>
					<div class="vahe"></div>
				</div>

				<div class="one_third last">
					<div class="esi-fb">
						<div class="esi-h1"><?php the_field('pealkiri-fb') ?></div>
						<?php the_field('facebook') ?>

					</div>
				</div>


			</div>
			<?php if($data['comments_pages']): ?>
				<?php wp_reset_query(); ?>
				<?php comments_template(); ?>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
</div>


		




	<?php get_footer(); ?>


