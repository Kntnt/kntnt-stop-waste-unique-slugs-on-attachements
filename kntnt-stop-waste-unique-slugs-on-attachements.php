<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Stop Waste of Unique Slugs on Attachements
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Stops waste of unique slugs (e.g. stevia) on attachments (media files) by adding a number at the end of its slug (e.g. stevia-2).
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_filter( 'wp_unique_post_slug_is_bad_attachment_slug', '__return_true' );
