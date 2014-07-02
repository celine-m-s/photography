
<?php get_header(); ?>

		<div id="content" class="col-sm-9">
			<section>
				 <h1><?php wp_title(''); ?></h1> 
					<?php while(have_posts()):the_post()?>
					<?php the_content(); ?>
					<?php endwhile; ?>
			</section> 
		</div> <!-- end row col-sm-9-->

<?php get_footer() ?>





