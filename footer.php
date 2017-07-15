
<footer class="full-width brand-dark relative">

	<div class="container full-height">
	<div class="row flex wrap full-height ">

			<div class="col-sm-4 self-center">
				<?php dynamic_sidebar( 'Footer-1' ); ?>
			</div>

			<div class="col-sm-4 self-center">
				<?php dynamic_sidebar( 'Footer-2' ); ?>
			</div>

			<div class="col-sm-4 self-center">
				<?php dynamic_sidebar( 'Footer-3' ); ?>
			</div>
		</div>


		<small class="inline-block no-p np-m abs-right copyright fz10"><i class="fa fa-copyright" aria-hidden="true"></i>
			<?php echo date("Y"); ?> Roopa Auto OÜ
		</small>

	</div>
</footer>
</div>	

<script src="https://use.fontawesome.com/8f86a69ff5.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF1le0cFoNTyRIhrHtFObVzjCvlFSZxaA&callback=initFooterMap"
		async defer></script>
<?php wp_footer(); ?>
</body>
</html>