<?php
/**
 * chrisfarrelly.co.uk Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package chrisfarrelly.co.uk
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_CHRISFARRELLY_CO_UK_VERSION', '1.0.0' );
const THEME_PATH = 'https://chrisfarrelly.co.uk/wp-content/themes/portfolio-child';
/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'chrisfarrelly-co-uk-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_CHRISFARRELLY_CO_UK_VERSION, 'all' );
	wp_enqueue_style( 'owlcarousel.min', get_stylesheet_directory_uri() . '/owlcarousel/owl.carousel.min.css' );
	wp_enqueue_style( 'owlcarousel.default', get_stylesheet_directory_uri() . '/owlcarousel/owl.theme.default.css' );
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


// add custom scripts
function add_custom_scripts() {
	wp_enqueue_script('scripts', THEME_PATH . '/js/scripts.js', null, null, true  );
	wp_enqueue_script('jquery');
	wp_enqueue_script('owlcarousel', THEME_PATH . '/owlcarousel/owl.carousel.min.js');
}
add_action('wp_enqueue_scripts', 'add_custom_scripts', 20);


//add blog text

function blog_text() {
	if(is_home()) {
		?>
<div class="wp-block-group alignfull about-me has-ast-global-color-2-background-color has-background">
    <div class="wp-block-cover__inner-container pt-1">
        <h1 class="has-white-color">My Blog</h1>
        <p class="pt-1 has-white-color">The Chris Farrelly Digital blog will cover lots of different aspects of web
            design, marketing, SEO and the developer life in general as I see it.</p>
        <p class="has-white-color">I intend to write about my project development experiences, marketing ideas and my
            personal experience of
            transitioning into tech via self teaching and Open University Study.</p>
    </div>

</div>

<?php
	}
}
add_action('astra_content_before', 'blog_text' , 10);

function astra_post_read_more() {
    return __( 'Read More', 'astra' );
}

add_filter( 'astra_post_read_more', 'astra_post_read_more' );

//Add estimated read time

function estimated_read_time() {
	if(is_single()) {
		//Most people read between 200 - 300 words per minute so lets go for a safe bet of 250
		$average = 250;
		$wordCount = str_word_count(wp_strip_all_tags(get_the_content()));
		$readingTime = $wordCount/$average;
		echo '<div class="read-time"><p>' . '<span id="readTime" data-time="' .round($readingTime) .'">0</span>' . ' minute read'  . '</p></div>';
	}
}

add_action('astra_entry_content_before', 'estimated_read_time', 20);