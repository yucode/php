<?php
	// Устанавливаем Cookie до конца сессии:
	// В случае успешной установки Cookie, функция SetCookie возвращает TRUE:
	if (isset($_COOKIE['test'])) {
		echo @$_COOKIE['test'];
	} elseif (SetCookie('test',$_POST['textfield'])) {
		echo '<h3>Cookies успешно установлены!</h3>';
	}
