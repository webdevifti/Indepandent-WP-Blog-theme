<?php get_header(); ?>
<main role="main">
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-9 main-content">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
				<?php 

					if (have_posts()) :
						while(have_posts()) :
							the_post();

							get_template_part('template-parts/content','archive');
						endwhile;
						
					endif;

				?>
				
				
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>