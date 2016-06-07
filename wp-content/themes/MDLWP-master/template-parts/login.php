<form name="loginform" id="loginform" action="<?php esc_url( site_url( 'wp-login.php', 'login_post' ) ) ?>" method="post">
    <p class="login-username">
        <label for="user_login"><?php esc_html( $_POST['label_username'] ) ?></label>
        <input type="text" name="log" id="user_login" class="input" value="<?php esc_attr( $_POST['value_username'] ) ?>" size="20" />
    </p>
    <p class="login-password">
        <label for="<?php esc_attr( $_POST['id_password'] ) ?>"><?php esc_html( $_POST['label_password'] ) ?></label>
        <input type="password" name="pwd" id="<?php esc_attr( $_POST['id_password'] ) ?>" class="input" value="" size="20" />
    </p>

    <p class="login-submit">
        <input type="submit" name="wp-submit" id="<?php esc_attr( $_POST['id_submit'] ) ?>" class="button-primary" value="<?php esc_attr( $_POST['label_log_in'] ) ?>" />
        <input type="hidden" name="redirect_to" value="<?php esc_url( $_POST['redirect'] ) ?>" />
    </p>
</form>