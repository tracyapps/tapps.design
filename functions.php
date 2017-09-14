<?php
// Theme support options
require_once( get_template_directory() . '/assets/functions/theme-support.php' );

// WP Head and other cleanup functions
require_once( get_template_directory() . '/assets/functions/cleanup.php' );

// Register scripts and stylesheets
require_once( get_template_directory() . '/assets/functions/enqueue-scripts.php' );

// Register custom menus and menu walkers
require_once( get_template_directory() . '/assets/functions/menu.php' );

// Register sidebars/widget areas
require_once( get_template_directory() . '/assets/functions/sidebar.php' );

// Makes WordPress comments suck less
require_once( get_template_directory() . '/assets/functions/comments.php' );

// Replace 'older/newer' post links with numbered navigation
require_once( get_template_directory() . '/assets/functions/page-navi.php' );

// Theme helper functions
require_once( get_template_directory() . '/assets/functions/start-helper.php' );

// Site options
require_once( get_template_directory() . '/assets/functions/site-options.php' );

// Extending ACF things
require_once( get_template_directory() . '/assets/functions/acf-import.php' );
require_once( get_template_directory() . '/assets/functions/acf-helper.php' );

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Adds support for multiple languages
// require_once( get_template_directory() . '/assets/translation/translation.php' );

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Customize the WordPress login menu
//require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
//require_once(get_template_directory().'/assets/functions/admin.php');

// Shortcodes
require_once(get_template_directory().'/assets/functions/shortcodes.php');