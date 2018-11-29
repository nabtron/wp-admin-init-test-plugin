<?php

    function save(){
        echo ">>>>>>>>>>>>>>>>>> This code is running in class-init-test-submenu.php file with admin_init";
    }
    add_action( 'admin_init', 'save' );
