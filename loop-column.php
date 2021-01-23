<?php 
if (have_posts()): while (have_posts()) : the_post();
( has_post_thumbnail() ) ? $thumbnail_true = has_post_thumbnail() : $thumbnail_true = false;
?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('column-item'); ?>>
		<div class="row">
			<div class="<?php if($thumbnail_true) { echo 'col-sm-8'; } else { echo 'col-sm-12';} ?>">
				<div class="column-content">
					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->

					<?php rtswp_excerpt('rtswp_index'); // Build your custom callback length in functions.php ?>

					<!-- post details -->
					<!-- <span class="date"><?php the_time('Y년 F j일'); ?> <?php // the_time('g:i a'); ?></span> -->
					<!-- <span class="author"><?php _e( 'Published by', 'righttax' ); ?> <?php the_author_posts_link(); ?></span> -->
					<!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'righttax' ), __( '1 Comment', 'righttax' ), __( '% Comments', 'righttax' )); ?></span> -->
					<!-- /post details -->
					<?php edit_post_link(); ?>
				</div>
			</div>

			<!-- post thumbnail -->
			<?php if ( $thumbnail_true ) : // Check if thumbnail exists ?>
			<div class="col-sm-4 thumb-wrap hdMB">
				<div class="thumb-inner">
					<?php the_post_thumbnail(array(700)); // Declare pixel size you need inside the array ?>
				</div>
			</div>
			<?php endif; ?>
			<!-- /post thumbnail -->
		</div>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( '검색결과를 찾을 수 없습니다.', 'righttax' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
