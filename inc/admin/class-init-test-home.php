<?php
	defined( 'WPINC' ) || exit;

    class Init_Test_Home {

        public function __construct() {
            add_action( 'admin_init', array( $this, 'save' ) );
            require_once('views/init-test-home.php');
        }
    
        public function save() {

            echo ">>>>>>>>>>>>>>>>>> This code is running in class-init-test-home.php file with admin_init";

            echo "<pre>" . print_r($_POST) . "</pre>";

            echo "it is not";
            if ( wp_verify_nonce( $_POST['_wpnonce'], 'Init Test' )) {
                return;
            }
            if ( !current_user_can( 'manage_options' )){
                return;
            }
            // Update routines
            if ('insert' == $_POST['init_test_1']) {
                update_option( 'init_test_1', $_POST['init_test_1'] );
            }                    

        }
    }
    
    $init_test_home = new Init_Test_Home();