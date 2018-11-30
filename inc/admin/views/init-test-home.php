<?php
    defined( 'WPINC' ) || exit;
?>
<div class="wrap">

    <h1>Init Test</h1>
    <hr class="wp-header-end">
    <div id="init-test-main">
        <form action="" method="post" name="" id="">
            <h2>Basic Settings</h2>
            <div class="init-test-form-block">
                <label for="init_test_1" class="doctor-cache-label">Enable</label>
                <input type="hidden" id="init_test_1_hidden" name="init_test_1" value="0" />
                <input type="checkbox" id="init_test_1" name="init_test_1" value="1" <?php checked(1,get_option( 'init_test_1' ));?> />
            </div>

            <?php wp_nonce_field('init_test_1', 'init_test_nonce'); //action, name ?>
            <?php submit_button(); ?>
        </form>
    </div>
</div>