<?php 
add_filter( 'body_class','mark_column_classes' );
get_header(); ?>

	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>고객님의 안전을 위해<br><span>끊임없이 연구하는 회계사</span></p>
		</div>
	</div>

	<main role="main">

		<div class="section-tit">
			<h1 class="text-center ff-mj"><?php echo get_search_query() . ' 관련 검색결과';?></h1>
			<p class="text-center"><?php echo sprintf( __( '검색결과 %s 개', 'righttax' ), $wp_query->found_posts );?></p>
		</div>
		<!-- section -->
		<section class="container column-container">

			<div class="row">
				<div class="col-md-9">
					<?php get_template_part('loop-column'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
				<div class="col-md-3"><?php get_sidebar(); ?></div>
			</div>
		</section>
		<!-- /section -->

		
	</main>

<?php get_footer(); ?>
