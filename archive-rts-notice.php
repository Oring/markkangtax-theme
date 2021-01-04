<?php
function notice_custom_title($post_title, $sep) {

	// [Page] - 소식페이지 ID 값 : 211
	$post_id = 211;
	$seo_title = get_post_meta($post_id, 'meta_seo_title', true);
	$site_title_off = get_post_meta($post_id, 'meta_seo_site_title_off', true);
	$ga_seo_title = get_option( 'ga_seo_title' );
	$ga_seo_tail = get_option( 'ga_seo_tail' );

	$post_title = ( empty($seo_title) ) ? get_the_title( $post_id ) : $seo_title;

	if( empty($ga_seo_tail) ) $ga_seo_tail = get_bloginfo( 'name', 'display' );
	if( !$site_title_off ) $post_title = $post_title." $sep ".$ga_seo_tail;

	return $post_title;
}

add_filter( 'wp_title', 'notice_custom_title', 10, 2 );

?>
<?php get_header(); ?>

	<div class="sub-sect-top">
		<div class="sub-sect-inner">
			<p>고객님의 안전을 위해<br><span>끊임없이 연구하는 회계사</span></p>
		</div>
	</div>

	<main role="main">

		<div class="section-tit">
			<h1 class="text-center ff-mj"><a href="/philosophy/notice/" class="ff-mj">미국/한국 세무소식</a></h1>
		</div>
		<!-- section -->
		<section class="container archive-notice">
			<div class="notice-wrap">
				<?php get_template_part('loop-notice'); ?>
			</div>
			<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->

		
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
