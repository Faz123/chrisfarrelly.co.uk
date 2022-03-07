<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!--Schema Markup-->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "founder": "Chris Farrelly",
        "legalName": "Chris Farrelly Digital",
        "name": "Chris Farrelly Digital",
        "image": [
            "https://chrisfarrelly.co.uk/wp-content/uploads/2022/02/black-logo.png"
        ],
        "areaServed": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 52.41488493910652,
                "longitude": -1.547485886716022
            },
            "geoRadius": 50000
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Coventry, UK",
            "streetAddress": "204 Dulverton Avenue",
            "postalCode": "CV5 8HB"
        },
        "telephone": "+447868283936",
        "url": "https://chrisfarrelly.co.uk",
        "email": "info@chrisfarrelly.co.uk",
        "priceRange": "££"

    }
    </script>
    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G1GLLR710X"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-G1GLLR710X');
    </script>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#content" role="link"
        title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
        <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
    </a>

    <div <?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>>
        <?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
        <div id="content" class="site-content">
            <div class="ast-container">
                <?php astra_content_top(); ?>