
<?php get_header(); ?>

		<div id="content" class="col-sm-9">
			<section>
				<div class="container">
					<h1><?php ;?></h1>
					<?php while(have_posts()):the_post()?>
					<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</section> 
		</div> <!-- end row col-sm-9-->

<?php get_footer() ?>





