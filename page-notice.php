<?php
get_header();
?>
	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>고객님의 안전을 위해<br><span>끊임없이 연구하는 회계사</span></p>
		</div>
	</div>
	<!-- container -->
	<section id="container">
		<!-- section -->
		<section class="ctnr-sm">

			<h1 class=""></h1>
			<?php
			
				$wp_query = new WP_Query( 
					array(
						'post_type' => 'rts-notice',
						'post_status' => 'publish',
						'paged' => get_query_var( 'paged' ),
						'posts_per_page' => '6'
						) 
					);
				
			?>


<section class="news-container">
	<div class="news-row">

	<?php if (have_posts()): while (have_posts()) : the_post(); 
		// $custom_post_category = get_the_terms( $post->ID, 'newsroom' );
	?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(array('news-item')); ?>>
			<div class="news-content">
				<div class="news-thumb"><?php the_post_thumbnail(array(125,125)); ?></div>
				<a href="<?php the_permalink(); ?>">
					<h2 class="news-title"><?php the_title(); ?></h2>
					<p class="news-excerpt"><?php rtswp_excerpt('rtswp_custom_post','righttax_view_article'); // Build your custom callback length in functions.php ?></p>
				</a>
				<div class="news-info"><span class="date"><?php the_time('Y. n. j'); ?></span>·<a href="<?php // echo get_term_link($custom_post_category[0]->term_id); ?>"><?php echo $custom_post_category[0]->name;?></a></div>
			</div>
			<?php edit_post_link(); ?>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>
			<h2 class="text-center"><?php _e( '죄송합니다. 요청하신 자료는 이동 및 삭제되었습니다.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->

	<?php endif; ?>

	</div>
</section>

			<?php // get_template_part('pagination-hrd'); ?>

		</section>
		<!-- /section -->
	</section>
	<!-- /container -->

<?php
get_footer();
?>