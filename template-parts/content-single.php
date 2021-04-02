<article>
	<div class="article-header">
		<h3 class="article-title">
			<?php the_title(); ?>
		</h3>
		<span>
			<a href="#"><i class="fa fa-clock-o"></i> Published On: <?php the_date(); ?></a>
		</span>
		<span>
			<a href="#"><i class="fa fa-user-o"></i> By: <?php the_author(); ?></a>
		</span>		<span>
			<a href="#comments"><i class="fa fa-comment-o"></i> <?php comments_number(); ?></a>
		</span>
	</div>
	<div class="article-body">
		<?php
			if (has_post_thumbnail()) : ?>
				<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="article-feature-image" alt="Article Feature Image">
	
				<?php
			else : ?>

				<?php
			endif;

		?>
		<div class="article-content">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="article-footer">
		<div class="article-tags">
			<?php the_tags(); ?>
		</div>
	</div>
</article>
<!-- comment area -->
<?php comments_template(); ?>