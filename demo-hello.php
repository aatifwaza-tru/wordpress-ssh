<?php
/**
 * Plugin Name: Demo Hello
 * Description: Starter demo plugin for wordpress-ssh.
 * Version:     1.0.0
 * Author:      aatifwaza-tru
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'wp_footer', 'demo_hello_output' );

/**
 * Outputs a simple hello message in the footer.
 */
function demo_hello_output() {
    echo '<p style="text-align:center;">Hello from wordpress-ssh 👋</p>';
}
