<?php
/*
 * This file is the main entry point for WordPress functions.
 * The top set of files generally require edits.
 */
    // Builds Vue router
    include_once get_template_directory() . '/functions/router.php';

    // Custom Rest-Easy filters
    include_once get_template_directory() . '/functions/rest-easy-filters.php';

    // Misc WordPress functions
    include_once get_template_directory() . '/functions/wp-functions.php';

    // Handles what image sizes WordPress should generate server side
    include_once get_template_directory() . '/functions/images.php';

    // Handles the server side processing of WordPress shortcodes
    include_once get_template_directory() . '/functions/shortcodes.php';

    // Defines the UI for custom meta boxes in WordPress
    include_once get_template_directory() . '/functions/meta-boxes.php';

/*
 * Generally you don't have to edit any of the files below
 */
     // Handles plugin dependencies (Rest-Easy and recommended Nested Pages)
     include_once get_template_directory() . '/functions/vp-plugins.php';

     // Handles Developer role
     include_once get_template_directory() . '/functions/developer-role.php';
