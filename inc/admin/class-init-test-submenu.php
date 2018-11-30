<?php
	defined( 'WPINC' ) || exit;

    class Init_Test_Submenu {

        public function __construct() {
            //add_action( 'admin_init', array( $this, 'save' ) );
        }

        public function view_active() {
            require_once('views/init-test-submenu.php');
        }
    }

    $init_test_submenu = new Init_Test_Submenu();