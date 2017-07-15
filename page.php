<?php /*
/**

   */
get_header(); ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>



<div id="main">
	<div class="bg-image full-width full-height <?php if(get_field('css_class')) { the_field('css_class'); } ?>" style="background-image: url('<?php if(get_field('taustapilt')) { the_field('taustapilt'); } ?>'); background-position: <?php the_field('taustapildi_joondus'); ?>" >
		<span class="overlay"></span>
	</div>
	<div class="fixed overlay">	
	</div>
	<div class="container">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-99774886-1', 'auto');
			ga('send', 'pageview');
		</script>
		<main class="row" >	
			
			<?php if( have_posts() ): the_post(); ?>

				
				<div  class="content" id="page-<?php the_ID(); ?>" role="article">
					<a class="pointer arrow fixed">
						<i class="fa fa-5x fa-angle-down color-white"></i>

					</a>
					<div class="inner p-gutx2" id="inner">

						<h1 class="text-center no-pt no-mt"><?php the_title(); ?></h1>
						<?php the_content(); ?>


						<?php 

						$images = get_field('galerii');
						$counter = 1;
						if( $images ): ?>
						
						<?php foreach( $images as $image ): ?>
							
							<?php $idnumber = $counter++; ?>
							<div class="col-md-6 m-b-gutx2">
								<a href="#pic-<?php echo $idnumber; ?>" class="thumbikas">
									<div class="thumbpic image"  style="background-image: url('<?php echo $image["sizes"]["large"]; ?>')"></div>
								</a>
								<div class="tarHide" id="pic-<?php echo $idnumber; ?>">	
									<a href="#inner">
										<div class="full-image"  style="background-image: url('<?php echo $image["sizes"]['large']; ?>')"></div>
									</a>
								</div>

							</div>


						<?php endforeach; ?>
						
					<?php endif; ?>

					<div class="clearfix"></div>

				</div>

			<?php endif; ?>

		</div>

		<script>
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
					e.preventDefault();
					var target = this.hash;
					$target = $(target);
					$('html, body').stop().animate({
            'scrollTop':  $target.offset().top //no need of parseInt here
        }, 900, 'swing', function () {
        	window.location.hash = target;
        });
				});
			});

			$('#navmenu a').click(function(){
				$('#navmenu a').removeClass('selected');

				$(this).addClass('selected');
			});

			/*$('a.thumbikas').click(function(){
				$('.fixed.overlay').fadeToggle();
			});*/


		</script>
	</main>
</div>



</div>





<script>	
	var wavesurfer = WaveSurfer.create({
		container: '#waveform',
		waveColor: '#444',
		progressColor: '#000',
		barHeight : 1,
		height: 20
	});

	wavesurfer.load('http://lovelybeats.ee/wp-content/uploads/2017/05/Gods-gonna-cut-you-down.mp3');
	$('.playbtn i').on('click',function(){
		$(this).toggleClass('fa-pause');
	});
	wavesurfer.on('ready', function () {
		$('.waveCont').removeClass('invisible');
	});
	

</script>

<?php get_footer(); ?>


