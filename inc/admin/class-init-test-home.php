<?php
	defined( 'WPINC' ) || exit;

    class Init_Test_Home {

        public function __construct() {
            if(isset($_POST['init_test_nonce'])){
                add_action( 'admin_init', array( $this, 'save' ) );
            }
        }

        public function view_active() {
            require_once('views/init-test-home.php');
        }

        public function save() {

            if ( !wp_verify_nonce($_POST['init_test_nonce'], 'init_test_1') ){
                    return;
                }

            if ( !current_user_can( 'manage_options' )){
                return;
            }
            // Update routines
            if (isset( $_POST['init_test_1'] )) {
                echo $_POST['init_test_1'];
                update_option( 'init_test_1', $_POST['init_test_1'] );
            }

        }
    }
    
    $init_test_home = new Init_Test_Home();