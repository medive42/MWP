<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyseventeen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 155, 110, true ); 
	
	add_image_size( ‘tiny’, 155, 110, true ); // Set thumbnail size 
    add_image_size( ‘small’, 350, 248, true ); // Set thumbnail size 
    add_image_size( ‘middle’, 700, 375, true ); // Set thumbnail size 
    add_image_size( ‘large’, 1004, 387, true ); // Set thumbnail size 
	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'twentyseventeen' ),
			'social' => __( 'Social Links Menu', 'twentyseventeen' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support(
		'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
		)
	);

	// Add theme support for Custom Logo.
	add_theme_support(
		'custom-logo', array(
			'width'      => 250,
			'height'     => 250,
			'flex-width' => true,
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
	  */
	add_editor_style( array( 'assets/css/editor-style.css', twentyseventeen_fonts_url() ) );

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(
		'widgets'     => array(
			// Place three core-defined widgets in the sidebar area.
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			// Add the core-defined business info widget to the footer 1 area.
			'sidebar-2' => array(
				'text_business_info',
			),

			// Put two core-defined widgets in the footer 2 area.
			'sidebar-3' => array(
				'text_about',
				'search',
			),
		),

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'       => array(
			'home',
			'about'            => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact'          => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog'             => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'twentyseventeen' ),
				'file'       => 'assets/images/espresso.jpg', // URL relative to the template directory.
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'twentyseventeen' ),
				'file'       => 'assets/images/sandwich.jpg',
			),
			'image-coffee'   => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'twentyseventeen' ),
				'file'       => 'assets/images/coffee.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'     => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods'  => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus'   => array(
			// Assign a menu to the "top" location.
			'top'    => array(
				'name'  => __( 'Top Menu', 'twentyseventeen' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name'  => __( 'Social Links Menu', 'twentyseventeen' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	);

	/**
	 * Filters Twenty Seventeen array of starter content.
	 *
	 * @since Twenty Seventeen 1.1
	 *
	 * @param array $starter_content Array of starter content.
	 */
	$starter_content = apply_filters( 'twentyseventeen_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twentyseventeen_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( twentyseventeen_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Twenty Seventeen content width of the theme.
	 *
	 * @since Twenty Seventeen 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'twentyseventeen_content_width', $content_width );
}
add_action( 'template_redirect', 'twentyseventeen_content_width', 0 );

/**
 * Register custom fonts.
 */
function twentyseventeen_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'twentyseventeen' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentyseventeen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyseventeen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentyseventeen_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'twentyseventeen' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'twentyseventeen' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'twentyseventeen' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyseventeen_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'twentyseventeen_pingback_header' );

/**
 * Display custom color CSS.
 */
function twentyseventeen_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );

	$customize_preview_data_hue = '';
	if ( is_customize_preview() ) {
		$customize_preview_data_hue = 'data-hue="' . $hue . '"';
	}
?>
	<style type="text/css" id="custom-theme-colors" <?php echo $customize_preview_data_hue; ?>>
		<?php echo twentyseventeen_custom_colors_css(); ?>
	</style>
<?php
}
add_action( 'wp_head', 'twentyseventeen_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'twentyseventeen-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
		wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
	wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentyseventeen-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$twentyseventeen_l10n = array(
		'quote' => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'twentyseventeen-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$twentyseventeen_l10n['expand']   = __( 'Expand child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['collapse'] = __( 'Collapse child menu', 'twentyseventeen' );
		$twentyseventeen_l10n['icon']     = twentyseventeen_get_svg(
			array(
				'icon'     => 'angle-down',
				'fallback' => true,
			)
		);
	}

	wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			$sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function twentyseventeen_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.

function twentyseventeen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3 );
 */
/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template', 'twentyseventeen_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Seventeen 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyseventeen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentyseventeen_widget_tag_cloud_args' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


//调用子分类
function get_category_root_id($cat)
{
$this_category = get_category($cat); // 取得当前分类
while($this_category->category_parent) // 若当前分类有上级分类时，循环
{
$this_category = get_category($this_category->category_parent); // 将当前分类设为上级分类（往上爬）
}
return $this_category->term_id; // 返回根分类的id号
}


//禁用页面的评论功能
function disable_page_comments( $posts ) {
    if ( is_page()) {
    $posts[0]->comment_status = 'disabled';
    $posts[0]->ping_status = 'disabled';
}
return $posts;
}
add_filter( 'the_posts', 'disable_page_comments' );


// 123
add_action('template_include', 'load_single_template');
  function load_single_template($template) {
    $new_template = '';
    if( is_single() ) {
      global $post;
      if( has_term('expert', 'category', $post) ) {
        $new_template = locate_template(array('single-expert.php' ));
      }
	  
	  if( has_term('section-xrs', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-xrs.php' ));
      }
	  if( has_term('section-ydb', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-ydb.php' ));
      }	  
	  if( has_term('section-ynjg', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-ynjg.php' ));
      }	
	  if( has_term('section-yws', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-yws.php' ));
      }	
	  if( has_term('section-ykjx', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-ykjx.php' ));
      }		  
	  if( has_term('section-qgss', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-qgss.php' ));
      }		  
	  if( has_term('section-jsfk', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-jsfk.php' ));
      }		  
	  if( has_term('section-bnz', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-bnz.php' ));
      }		  
	  if( has_term('section-qgy', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-qgy.php' ));
      }		  
	  if( has_term('section-jmb', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-jmb.php' ));
      }	
	  
	  if( has_term('section-zy', 'category', $post) ) {
        $new_template = locate_template(array('template-parts/sections/single-section-zy.php' ));
      }			  
    }
    return ('' != $new_template) ? $new_template : $template;
  }
  
  
  
//thumbnails自动生成特色图片
add_theme_support( 'post-thumbnails' );

function don_the_thumbnail() {
    global $post;
    // 判断该文章是否设置的缩略图，如果有则直接显示
    if ( has_post_thumbnail() ) {
        echo '<a href="'.get_permalink().'">';
        the_post_thumbnail();
        echo '</a>';
    } else { //如果文章没有设置缩略图，则查找文章内是否包含图片
        $content = $post->post_content;
        preg_match_all('/<img.*?(?: |\\t|\\r|\\n)?src=[\'"]?(.+?)[\'"]?(?:(?: |\\t|\\r|\\n)+.*?)?>/sim', $content, $strResult, PREG_PATTERN_ORDER);
        $n = count($strResult[1]);
        if($n > 0){ // 如果文章内包含有图片，就用第一张图片做为缩略图
            echo '<a href="'.get_permalink().'"><img src="'.$strResult[1][0].'" /></a>';
        }else { // 如果文章内没有图片，则用默认的图片。
            echo '<a href="'.get_permalink().'"><img src="'.get_bloginfo('template_url').'/img/thumbnail.jpg" /></a>';
        }
    }
}



// 不同分类 不同分类模版
function post_is_in_descendant_category( $cats, $_post = null ) 
{ 
foreach ( (array) $cats as $cat ) { 
// get_term_children() accepts integer ID only 
$descendants = get_term_children( (int) $cat, 'category'); 
if ( $descendants && in_category( $descendants, $_post ) ) 
return true; //
} 
return false; 
} 


/**
  *WordPress 文章列表分页导航
  *http://www.endskin.com/page-navi/
*/
function Bing_get_pagenavi( $query = false, $num = false, $before = '<article class="pagenavi postlistpagenavi">', $after = '</article>', $options = array() ){
  global $wp_query;
  $options = wp_parse_args( $options, array(
    'pages_text' => '%CURRENT_PAGE%/%TOTAL_PAGES%',
    'current_text' => '%PAGE_NUMBER%',
    'page_text' => '%PAGE_NUMBER%',
    'first_text' => __( '« 首页', 'Bing' ),
    'last_text' => __( '尾页 »', 'Bing' ),
    'next_text' => __( '»', 'Bing' ),
    'prev_text' => '«',
    'dotright_text' => '...',
    'dotleft_text' => '...',
    'num_pages' => 5,
    'always_show' => 0,
    'num_larger_page_numbers' => 3,
    'larger_page_numbers_multiple' => 10
  ) );
  if( $wp_query->max_num_pages <= 1 || is_single() ) return;
  if( !empty( $query ) ){
    $request = $query->request;
    $numposts = $query->found_posts;
    $max_page = $query->max_num_pages;
    $posts_per_page = intval( $num );
  }else{
    $request = $wp_query->request;
    $numposts = $wp_query->found_posts;
    $max_page = $wp_query->max_num_pages;
    $posts_per_page = intval( get_query_var( 'posts_per_page' ) );
  }
  $paged = intval( get_query_var( 'paged' ) );
  if( empty( $paged ) || $paged == 0 ) $paged = 1;
  $pages_to_show = intval( $options['num_pages'] );
  $larger_page_to_show = intval( $options['num_larger_page_numbers'] );
  $larger_page_multiple = intval( $options['larger_page_numbers_multiple'] );
  $pages_to_show_minus_1 = $pages_to_show - 1;
  $half_page_start = floor( $pages_to_show_minus_1 / 2 );
  $half_page_end = ceil( $pages_to_show_minus_1 / 2 );
  $start_page = $paged - $half_page_start;
  if( $start_page <= 0 ) $start_page = 1;
  $end_page = $paged + $half_page_end;
  if( ( $end_page - $start_page ) != $pages_to_show_minus_1 ) $end_page = $start_page + $pages_to_show_minus_1;
  if( $end_page > $max_page ){
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = $max_page;
  }
  if( $start_page <= 0 ) $start_page = 1;
  $larger_per_page = $larger_page_to_show * $larger_page_multiple;
  $larger_start_page_start = ( ( floor( $start_page / 10 ) * 10 ) + $larger_page_multiple ) - $larger_per_page;
  $larger_start_page_end = floor( $start_page / 10 ) * 10 + $larger_page_multiple;
  $larger_end_page_start = floor( $end_page / 10 ) * 10 + $larger_page_multiple;
  $larger_end_page_end = floor( $end_page / 10 ) * 10 + ( $larger_per_page );
  if( $larger_start_page_end - $larger_page_multiple == $start_page ){
    $larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
    $larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
  }
  if( $larger_start_page_start <= 0 ) $larger_start_page_start = $larger_page_multiple;
  if( $larger_start_page_end > $max_page ) $larger_start_page_end = $max_page;
  if( $larger_end_page_end > $max_page ) $larger_end_page_end = $max_page;
  if( $max_page > 1 || intval( $options['always_show'] ) == 1 ){
    $pages_text = str_replace( '%CURRENT_PAGE%', number_format_i18n( $paged ), $options['pages_text'] );
    $pages_text = str_replace( '%TOTAL_PAGES%', number_format_i18n( $max_page ), $pages_text);
    echo $before;
    if( !empty( $pages_text ) ) echo '<span class="pages">' . $pages_text . '</span>';
    if( $start_page >= 2 && $pages_to_show < $max_page ){
      $first_page_text = str_replace( '%TOTAL_PAGES%', number_format_i18n( $max_page ), $options['first_text'] );
      echo '<a href="' . esc_url( get_pagenum_link() ) . '" class="first" title="' . $first_page_text . '">' . $first_page_text . '</a>';
    }
    if( $larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page ){
      for( $i = $larger_start_page_start;$i < $larger_start_page_end;$i += $larger_page_multiple ){
        $page_text = str_replace( '%PAGE_NUMBER%', number_format_i18n( $i ), $options['page_text'] );
        echo '<a href="' . esc_url( get_pagenum_link( $i ) ) . '" class="page" title="' . $page_text . '">' . $page_text . '</a>';
      }
    }
    previous_posts_link( $options['prev_text'] );
    for( $i = $start_page;$i <= $end_page;$i++ ){            
      if( $i == $paged ){
        $current_page_text = str_replace( '%PAGE_NUMBER%', number_format_i18n( $i ), $options['current_text'] );
        echo '<span class="current">' . $current_page_text . '</span>';
      }else{
        $page_text = str_replace( '%PAGE_NUMBER%', number_format_i18n( $i ), $options['page_text'] );
        echo '<a href="' . esc_url( get_pagenum_link( $i ) ).'" class="page" title="' . $page_text . '">' . $page_text . '</a>';
      }
    }
    if( empty( $query ) ) echo '<span id="next-page">';
    next_posts_link( $options['next_text'], $max_page );
    if( empty( $query ) ) echo '</span>';
  }
  if( $larger_page_to_show > 0 && $larger_end_page_start < $max_page ){
    for( $i = $larger_end_page_start;$i <= $larger_end_page_end;$i += $larger_page_multiple ){
      $page_text = str_replace( '%PAGE_NUMBER%', number_format_i18n( $i ), $options['page_text'] );
      echo '<a href="' . esc_url( get_pagenum_link( $i ) ).'" class="page" title="' . $page_text . '">' . $page_text . '</a>';
    }
  }
  if( $end_page < $max_page ){
    $last_page_text = str_replace( '%TOTAL_PAGES%', number_format_i18n( $max_page ), $options['last_text'] );
    echo '<a href="' . esc_url( get_pagenum_link( $max_page ) ) . '" class="last" title="' . $last_page_text . '">' . $last_page_text . '</a>';
  }
  echo $after;
}


// 自定义标题数字
function customTitle($limit) {
    $title = get_the_title($post->ID);
    if(strlen($title) > $limit) {
        $title = substr($title, 0, $limit) . '...';
    }
 
    echo $title;
}



//调用当前TAG标签的热门文章
function get_current_category_id() {
$current_category = single_cat_title(”, false);//获得当前分类目录名称
return get_cat_ID($current_category);//获得当前分类目录ID
}
function get_current_tag_id() {
$current_tag = single_tag_title(”, false);//获得当前TAG标签名称
$tags = get_tags();//获得所有TAG标签信息的数组
foreach($tags as $tag) {
if($tag->name == $current_tag) return $tag->term_id; //获得当前TAG标签ID，其中term_id就是tag ID
}
}




//使ueditor插件在5.0+版本生效
add_filter('use_block_editor_for_post', '__return_false');



/**
 * WordPress 去除后台标题中的“—— WordPress”
 * https://www.wpdaxue.com/remove-wordpress-from-admin-title.html
 * 参考代码见 https://core.trac.wordpress.org/browser/tags/4.2.2/src/wp-admin/admin-header.php#L44
 */
add_filter('admin_title', 'wpdx_custom_admin_title', 10, 2);
function wpdx_custom_admin_title($admin_title, $title){
 return $title.' &lsaquo; '.get_bloginfo('name');
}

/**
 * 隐藏核心更新提示 WP 3.0+
 * 来自 http://wordpress.org/plugins/disable-wordpress-core-update/
 */
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );  /**
 * 隐藏插件更新提示 WP 3.0+
 * 来自 http://wordpress.org/plugins/disable-wordpress-plugin-updates/
 */
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$b', "return null;" ) );  /**
 * 隐藏主题更新提示 WP 3.0+
 * 来自 http://wordpress.org/plugins/disable-wordpress-theme-updates/
 */
remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', create_function( '$c', "return null;" ) );



/**
 * 自定义 WordPress 后台底部的版权和版本信息
 * https://www.wpdaxue.com/change-admin-footer-text.html
 */
add_filter('admin_footer_text', 'left_admin_footer_text'); 
function left_admin_footer_text($text) {
	// 左边信息
	$text = '<span id="footer-thankyou">201907版本<a href=""> </a> </span>'; 
	return $text;
}
add_filter('update_footer', 'right_admin_footer_text', 11); 
function right_admin_footer_text($text) {
	// 右边信息
	$text = "";
	return $text;
}


//固定后台管理侧边栏
function Bing_fixed_adminmenuwrap(){
	echo '<style type="text/css">#adminmenuwrap{position:fixed;left:0px;z-index:2;}</style>';
};
add_action('admin_head', 'Bing_fixed_adminmenuwrap');

//去除header冗余代码
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');



function remove_dashboard_widgets() {
    global $wp_meta_boxes;
  
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );


/**
 * 将 WordPress 3.8 仪表盘设置为单栏布局
 * https://www.wpdaxue.com/wordpress-3-8-single-column-dashboard.html
 */
function wpdx_screen_layout_columns($columns) {
 $columns['dashboard'] = 1;
 return $columns;
}
add_filter('screen_layout_columns', 'wpdx_screen_layout_columns');  function wpdx_screen_layout_dashboard() { return 1; }
add_filter('get_user_option_screen_layout_dashboard', 'wpdx_screen_layout_dashboard');


//隐藏显示选项
function remove_screen_options(){ return false;}
add_filter('screen_options_show_screen', 'remove_screen_options');


//隐藏帮助
add_filter( 'contextual_help', 'wpse50723_remove_help', 999, 3 );
function wpse50723_remove_help($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}

//放在functions.php中 去除部分可能无用标签
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'feed_links_extra',3);
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );



