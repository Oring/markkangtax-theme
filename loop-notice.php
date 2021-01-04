<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('notice-item'); ?>>

		<!-- post details -->
		<p class="notice-date"><?php the_time('Y.m.d.'); ?> <?php // the_time('a g:i'); ?></p>
		<!-- post title -->
		<h2 class="notice-tit">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<?php //rtswp_excerpt('rtswp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<section>
		<h2 class="text-center"><?php _e( '죄송합니다. 찾으시는 페이지가 없습니다.', 'righttax' ); ?></h2>
	</section>
	<!-- /article -->

<?php endif; ?>
