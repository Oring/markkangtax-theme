<?php get_header(); ?>

	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>고객님의 안전을 위해<br><span>끊임없이 연구하는 회계사</span></p>
		</div>
	</div>
	<main role="main">
	<!-- section -->
	<section class="container article-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- .post-header -->
			<div class="post-header">
				<h1 class="post-tit">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="post-info">
					<span class="date"><?php the_time('Y.m.d.'); ?> <?php the_time('h:i'); ?></span>
					<span class="author"><?php the_author(); ?></span>
				</div>
			</div>
			<!-- // .post-header -->

			<?php the_content(); // Dynamic Content ?>

			<?php // the_tags( __( 'Tags: ', 'righttax' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

				<div class="notice-post-nnp">
					<?php echo get_the_rts_post_navigation( array(prev_text => '<span>이전글</span> %title', next_text => '<span>다음글</span> %title', screen_reader_text => '소식 목록')); ?>
				</div>
		</article>
		<!-- // .article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( '죄송합니다. 찾으시는 페이지가 없습니다.', 'righttax' ); ?></h1>

		</article>
		<!-- // .article -->

	<?php endif; ?>

	</section>
	<!-- // .section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>

