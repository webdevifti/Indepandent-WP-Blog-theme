<?php get_header(); ?>
<main role="main">
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-9 main-content">
				<?php 

					if (have_posts()) :
						while(have_posts()) :
							the_post();

							get_template_part('template-parts/content','search');
						endwhile;
						else: 
							echo "<h2 class='page-title'>Nothing Found</h2>";
					endif;

				?>
				
				<?php 
						the_posts_pagination();
					?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>