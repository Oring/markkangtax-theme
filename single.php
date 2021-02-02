<?php
add_filter( 'body_class','mark_column_classes' );
get_header(); ?>

	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>Mark Kang Tax<br><span>전문가 칼럼</span></p>
		</div>
	</div>

	<main role="main">
	<!-- section -->
	<section class="container article-container">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- .post-header -->
			<div class="post-header">
				<h1 class="post-tit">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<div class="post-info">
					<span class="date"><?php the_time('Y.m.d.'); ?> <?php the_time('h:i'); ?></span>
					<span class="author"><?php the_author(); ?></span>
				</div>
				<hr class="post-tit-line">
			</div>
			<!-- // .post-header -->

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->


			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'righttax' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php // _e( 'Categorised in: ', 'righttax' ); the_category(', '); // Separated by commas ?></p>

			<p><?php // _e( 'This post was written by ', 'righttax' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php // comments_template(); ?>

			
		</article>

		
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'righttax' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
		<div class="">
			<div class=""><?php get_sidebar(); ?></div>
		</div>
	</section>
	<?php /*
	<div class="blog-post-nnp container">
		<?php echo get_the_rts_post_navigation( array(prev_text => '<span>이전글</span> %title', next_text => '<span>다음글</span> %title', screen_reader_text => '칼럼 목록')); ?>
	</div>
	*/ ?>
		
		<div class="blog-post-nnp container">
			<h2 class="prevNextTitle">컬럼목록</h2>
			<?php
				$prev_post = get_previous_post();
				$next_post = get_next_post();

				add_filter('excerpt_length', 'rtswp_index');

				if (!empty( $prev_post )): ?>
					<div class="prevWrap">
						<div class="left-content">
							<div class="left-title"><?php echo esc_attr( $prev_post->post_title); ?></div>
							<div class="left-desc"><?php echo get_the_excerpt($prev_post->ID); ?></div>	
						</div>
						<div class="right-img"><?php echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' ); ?></div>
					</div>
				<?php endif;
				if (!empty( $next_post )): ?>
					<div class="nextWrap">
						<div>
							<div><?php echo esc_attr( $next_post->post_title ); ?></div>
							<div><?php echo get_the_excerpt($next_post->ID); ?></div>	
						</div>
						<div><?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail' ); ?></div>
					</div>
			<?php endif; ?>
		</div>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
