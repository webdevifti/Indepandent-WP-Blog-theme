<?php get_header(); ?>
<main role="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 main-content">
				<?php 

					if (have_posts()) :
						while(have_posts()) :
							the_post();

							get_template_part('template-parts/content','page');
						endwhile;
						
					endif;

				?>
				
				
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>