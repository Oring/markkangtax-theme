<?php
/*
 *  Author: Jake Lim | @toddmotto
 *  URL: gomiad.com | @gomiad
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('righttax', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Right Tax navigation
function righttax_nav($menu_name = 'header-menu')
{
	wp_nav_menu(
	array(
		'theme_location'  => $menu_name,
		'menu'            => '',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu-rts',
		'menu_id'         => '',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load Right Tax scripts (header.php)
function righttax_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('righttaxscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.1'); // Custom scripts
        wp_enqueue_script('righttaxscripts'); // Enqueue it!

		wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/lib/bootstrap.min.js', array('jquery'), '3.3.7'); // Modernizr
		wp_enqueue_script('bootstrapjs'); // Enqueue it!

        wp_register_script('parollerjs', get_template_directory_uri() . '/js/lib/parallax.min.js', array('jquery'), '1.0.1'); // Modernizr
        wp_enqueue_script('parollerjs'); // Enqueue it!
        // wp_register_script('TweenMaxjs', get_template_directory_uri() . '/js/lib/TweenMax.min.js', array(), '1.0.1'); // Modernizr
        // wp_enqueue_script('TweenMaxjs'); // Enqueue it!
        wp_register_script('skroller', get_template_directory_uri() . '/js/lib/skrollr.min.js', array('jquery'), '1.0.1'); // Modernizr
        wp_enqueue_script('skroller'); // Enqueue it!
        // wp_register_script('gsapjs', get_template_directory_uri() . '/js/lib/animation.gsap.min.js', array(), '1.0.1'); // Modernizr
        // wp_enqueue_script('gsapjs'); // Enqueue it!
    }
}

// Load Right Tax conditional scripts (조건부 스크립트)
function righttax_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load Right Tax styles
function righttax_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('righttax', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('righttax'); // Enqueue it!

    // wp_register_style('webfont-myeongjo', 'http://fonts.googleapis.com/earlyaccess/nanummyeongjo.css', array(), '1.0', 'all');
    // wp_enqueue_style('webfont-myeongjo'); // Enqueue it!
    // wp_register_style('webfont-square', 'https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css', array(), '1.0', 'all');
    // wp_enqueue_style('webfont-square'); // Enqueue it!

    wp_register_style('rtsfont', get_template_directory_uri() . '/css/fonts.css', array(), '1.3', 'all');
    wp_enqueue_style('rtsfont'); // Enqueue it!

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('main-nav', get_template_directory_uri() . '/css/main-nav.css', array(), '1.2', 'all');
    wp_enqueue_style('main-nav'); // Enqueue it!
    wp_register_style('maincss', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
    wp_enqueue_style('maincss'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_righttax_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'righttax'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'righttax'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'righttax') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'righttax'),
        'description' => __('Description for this widget-area...', 'righttax'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'righttax'),
        'description' => __('Description for this widget-area...', 'righttax'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function rtswp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
		'prev_text' => '<',
		'next_text' => '>',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function rtswp_index($length) // Create 20 Word Callback for Index page Excerpts, call using rtswp_excerpt('rtswp_index');
{
    return 40;
}

// Create 40 Word Callback for Custom Post Excerpts, call using rtswp_excerpt('rtswp_custom_post');
function rtswp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function rtswp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function righttax_view_article($more)
{
    global $post;
    return ' &middot;&middot;&middot; <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('더 보기', 'righttax') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function righttax_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function rtsblankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function rtscomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'righttax_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'righttax_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'righttax_styles'); // Add Theme Stylesheet
add_action('init', 'register_righttax_menu'); // Add HTML5 Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'rtswp_pagination'); // Add our Right Tax Service Pagination
add_action('init', 'create_post_type_notice'); // Add our HTML5 Blank Custom Post Type

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'rtsblankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'righttax_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'righttax_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
// add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
// add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	jQuery Migrate Script 제거, 서버로부터 jQuery 로드
\*------------------------------------*/

function replace_jquery_migrate_with_server_hosted_jquery() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery.min.js', false, null);
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery_migrate_with_server_hosted_jquery');


/*------------------------------------*\
	마크 칼럼
\*------------------------------------*/

function mark_column_classes( $classes ) {
	$classes[] = 'mark-column';
	return $classes;
}


/*------------------------------------*\
	Custom Post Types -소식
\*------------------------------------*/

// Create 1 Custom Post type, called 소식

function create_post_type_notice()
{
	register_taxonomy_for_object_type('category', 'rts-notice'); // Register Taxonomies for Category
	// register_taxonomy_for_object_type('post_tag', 'rts-notice');
	$labels = array(
		'name' => __('소식', 'righttax'), // Rename these to suit
		'singular_name' => __('소식', 'righttax'),
		'add_new' => __('Add New 소식', 'righttax'),
		'add_new_item' => __('Add New 소식', 'righttax'),
		'edit' => __('Edit', 'righttax'),
		'edit_item' => __('Edit 소식', 'righttax'),
		'new_item' => __('New 소식', 'righttax'),
		'view' => __('View 소식', 'righttax'),
		'view_item' => __('View 소식', 'righttax'),
		'search_items' => __('Search 소식', 'righttax'),
		'not_found' => __('No 소식 found', 'righttax'),
		'not_found_in_trash' => __('No 소식 found in Trash', 'righttax')
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
		'has_archive' => true,
		'supports' => array('title','editor','excerpt','thumbnail'), // Go to Dashboard Custom Notice post for supports
		'can_export' => true, // Allows export in Tools > Export
        'menu_position'=>5,
		// 'taxonomies' => array('category'), // Add Category and Post Tags support
		'rewrite' => array( 'slug' => 'philosophy/notice' ) // 컨텐츠(글) 퍼머링크 rewrite
	);

	register_post_type('rts-notice', $args );// Register Custom Post Type
}



function get_the_rts_post_navigation( $args = array() ) {
	$args = wp_parse_args( $args, array(
		'prev_text'          => '%title',
		'next_text'          => '%title',
		'in_same_term'       => false,
		'excluded_terms'     => '',
		'taxonomy'           => 'category',
		'screen_reader_text' => __( 'Post navigation' ),
	) );

	$navigation = '';

	$previous = get_previous_post_link(
		'<div class="nav-previous">%link</div>',
		$args['prev_text'],
		$args['in_same_term'],
		$args['excluded_terms'],
		$args['taxonomy']
	);

	$next = get_next_post_link(
		'<div class="nav-next">%link</div>',
		$args['next_text'],
		$args['in_same_term'],
		$args['excluded_terms'],
		$args['taxonomy']
	);

	// Only add markup if there's somewhere to navigate to.
	if ( $previous || $next ) {
		$navigation = _navigation_markup( $next . $previous, 'post-navigation', $args['screen_reader_text'] );
	}

	return $navigation;
}


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

/*
// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}
*/


function do_rewrite() {
  flush_rewrite_rules() ;
}

add_action('init', 'do_rewrite');
?>
