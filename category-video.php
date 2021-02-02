<?php 
add_filter( 'body_class','mark_column_classes' );
get_header(); ?>

	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>Mark Kang Tax<br><span>전문가 칼럼</span></p>
		</div>
	</div>

	<main role="main">

		<div class="section-tit hdMB">
			<h1 class="text-center"><?php _e( '마크강 ', 'righttax' ); single_cat_title(); ?></h1>
		</div>
		<!-- section -->
		<section class="container column-container">

			<div>
				<div>
					<?php get_template_part('loop-column'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
				<?php /* <div class="col-md-3"><?php get_sidebar(); ?></div> */ ?>
			</div>
		</section>
		<!-- /section -->

		
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>