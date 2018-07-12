<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );

/*
 * Функция, добавляющая страницу в пункт меню Настройки
 */
function site_options() {
	add_menu_page( 'Дополнительные настройки сайта', 'Дополнительно', 'manage_options', 'site-options', 'site_options_content', 'dashicons-admin-generic');
	//картинки тут - https://developer.wordpress.org/resource/dashicons/#slides
}
add_action('admin_menu', 'site_options');
 
/**
 * Возвратная функция (Callback)
 */
function site_options_content(){
	if ($_POST) {
		$site_options = array();

		foreach ($_POST as $key => $value) {
			$site_options[$key] = $value;
		}

		update_option('site_options', $site_options);
	}

	$result = get_option('site_options');

	?>
		<div class="wrap">
		<h1>Дополнительные настройки сайта</h1>
		
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
			  <label for="main_phone">Основной телефон:</label>
			  <input type="text" class="form-control" id="main_phone" name="main_phone" value="<?=$result['main_phone']?>">
			</div>
			<div class="form-group">
			  <label for="main_email">Основной e-mail:</label>
			  <input type="email" class="form-control" id="main_email" name="main_email" value="<?=$result['main_email']?>">
			</div>
				<legend>Офис</legend>
            <div class="form-group">
			  <label for="map_link">Ссылка на карту проезда (Google):</label>
			  <input type="text" class="form-control" id="map_link" name="map_link" value="<?=$result['map_link']?>">
            </div>
            <div class="form-group">
			  <label for="address">Адрес:</label>
			  <input type="text" class="form-control" id="address" name="address" value="<?=$result['address']?>">
            </div>
            <div class="form-group">
                <label for="office_work_days">Дни работы:</label>
			    <input type="text" class="form-control" id="office_work_days" name="office_work_days" value="<?=$result['office_work_days']?>">
            </div>
            <div class="form-group">
                <label for="office_work_time">Время работы:</label>
			  <input type="text" class="form-control" id="office_work_time" name="office_work_time" value="<?=$result['office_work_time']?>">
			</div>

			<p class="submit">  
				<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
			</p>
		</form>
	</div>
<?php
}