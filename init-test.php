<?php

/**
 * The init test file
 *
 * @wordpress-plugin
 * Plugin Name:       init test
 * Plugin URI:        http://nabtron.com/
 * Description:       init test
 * Version:           0.1
 * Author:            Nabtron
 * Author URI:        http://nabtron.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       init-test
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) { die; }

define( 'INIT_TEST_DIR_NAME', basename(__DIR__) );
define( 'INIT_TEST_DIR_PATH', plugin_dir_path( __FILE__ ) );

require INIT_TEST_DIR_PATH . 'inc/admin/class-init-test.php';

function run_init_test() {
	$plugin = new Init_Test();
}
run_init_test();
