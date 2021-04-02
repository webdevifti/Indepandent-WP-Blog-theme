<article>
	<div class="article-header">
		<h3 class="article-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<span>
			<a href="#"><i class="fa fa-clock-o"></i> Published On: <?php the_date(); ?></a>
		</span>
		<span>
			<a href="#"><i class="fa fa-user-o"></i> By: <?php the_author(); ?></a>
		</span>
		<span>
			<a href="#"><i class="fa fa-comment-o"></i> <?php comments_number(); ?></a>
		</span>
	</div>
	<div class="article-body">
		<?php
			if (has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="article-feature-image" alt="Article Feature Image">
				</a>
				<?php
			else : ?>

				<?php
			endif;

		?>
		
		<div class="article-content">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="readmoreBtn">Continue Reading <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>
	<div class="article-footer">
		<div class="article-tags">
			<?php the_tags(); ?>
		</div>
	</div>
</article>