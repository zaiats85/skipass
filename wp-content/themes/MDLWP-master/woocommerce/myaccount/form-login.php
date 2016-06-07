<div class="form-wrapper">

	<h2 class="register-heading"><?php _e( 'Sign Up', 'debate' ); ?></h2>

	<div id="error-message"></div>

	<form method="post" name="st-register-form">


		<div class="form-label"><label for="st-full-name"><?php _e( 'Ім’я та Прізвище ', 'debate' ); ?></label></div>
		<div class="field"><input type="text" autocomplete="off" name="full_name" id="st-full-name" /></div>

		<div class="form-label"><label for="st-city"><?php _e( ' Місто ', 'debate' ); ?></label></div>
		<div class="field"><input type="text" autocomplete="off" name="city" id="st-city" /></div>

		<div class="form-label"><label for="st-telephone"><?php _e( ' Телефон ', 'debate' ); ?></label></div>
		<div class="field"><input type="text" autocomplete="off" name="telephone" id="st-telephone" /></div>

		<div class="form-label"><label for="st-email"><?php _e( 'Email', 'debate' ); ?></label></div>
		<div class="field"><input type="text" autocomplete="off" name="email" id="st-email" /></div>

		<div class="form-label"><label for="st-psw"><?php _e( 'Пароль', 'debate' ); ?></label></div>
		<div class="field"><input type="password" name="password" id="st-psw" /></div>

		<div class="form-label"><label for="st-psw2"><?php _e( 'Порторити пароль', 'debate' ); ?></label></div>
		<div class="field"><input type="password" name="passwordRepeat" id="st-psw2" /></div>

		<div class="frm-button"><input type="button" id="register-me" value="Register" /></div>

	</form>

</div>
