<?php 
	defined( 'WPINC' ) || exit;

	class Init_test {

		public function __construct(){
			add_action( 'admin_init', array( $this, 'page_init' ) );
			add_action( 'admin_menu', array( $this, 'add_menu' ) );
		}

		public function page_init() {
            echo ">>>>>>>>>>>>>>>>>> This code is running in class-init-test.php file with admin_init";
		}

		public function add_menu() {
			add_menu_page(
				'Init Test',
				'Init Test',
				'manage_options',
				INIT_TEST_DIR.'/inc/admin/class-init-test-home.php',
				'',
				'dashicons-yes',
				89
			);

			add_submenu_page(
				INIT_TEST_DIR.'/inc/admin/class-init-test-home.php',
				'Init Test submenu',
				'Init Test submenu',
				'manage_options',
				INIT_TEST_DIR.'/inc/admin/class-init-test-submenu.php',
				''
			);
		}
	}