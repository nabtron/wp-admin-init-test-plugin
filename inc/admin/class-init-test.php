<?php 
	defined( 'WPINC' ) || exit;

	class Init_test {

		public function __construct(){
			add_action( 'admin_init', array( $this, 'page_init' ) );
			add_action( 'admin_menu', array( $this, 'add_menu' ) );
		}

		public function page_init() {

		}

		public function add_menu() {
			
			include INIT_TEST_DIR_PATH . '/inc/admin/class-init-test-home.php';
			include INIT_TEST_DIR_PATH . '/inc/admin/class-init-test-submenu.php';


			add_menu_page(
				'Init Test',
				'Init Test',
				'manage_options',
				'init-test-home',
				array( $init_test_home, 'view_active' ),
				'dashicons-yes',
				89
			);

			add_submenu_page(
				'init-test-home',
				'Init Test submenu',
				'Init Test submenu',
				'manage_options',
				'init-test-submenu',
				array( $init_test_submenu, 'view_active' )
			);
		}
	}