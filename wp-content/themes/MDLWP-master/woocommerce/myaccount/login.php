<div id="error-messages-login"></div>

<form name="loginform" id="loginform" action="<?php esc_url( site_url( 'wp-login.php', 'login_post' ) ) ?>" method="post">
    <p class="login-username">
        <label for="user_login">Імейл</label>
        <input type="text" name="log" id="user_login" class="input" value="<?php esc_attr( $_POST['value_username'] ) ?>" size="20" />
    </p>
    <p class="login-password">
        <label for="password">Пароль</label>
        <input type="password" name="pwd" id="password" class="input" value="" size="20" />
    </p>

    <label for="rememberme">Запамятати?</label>
    <input type="checkbox" id="rememberme" value="forever" <?php echo ($_POST['remember']) ? 'checked="checked"' : '' ?>>

    <p class="login-submit">
        <input type="submit" name="wp-submit" id="wp-login-btn" class="button-primary" value="Ввійти" />
        <input type="hidden" name="redirect_to" value="<?php esc_url( $_POST['redirect'] ) ?>" />
    </p>
</form>