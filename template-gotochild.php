<?php
/*
Template Name: Go to first child
*/
header( "HTTP/1.1 301 Moved Permanently" );
$pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
if ($pagekids) {
	$firstchild = $pagekids[0];
	wp_redirect(get_permalink($firstchild->ID),301);
} else {
// Do whatever templating you want as a fall-back.
}
?>