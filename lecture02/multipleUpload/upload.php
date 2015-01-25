<?php
	$uploaddir='./files/';
	foreach ($_FILES['userfile']['name'] as $key=>$value) {
		if (empty($value)) {
			echo "<h3>Ошибка! Выберите файл!</h3>";
			exit;
		}
		$uploadfile = $uploaddir.basename($value);
		if (copy($_FILES['userfile']['tmp_name'][$key], $uploadfile)) {
			echo "<h3>Файл успешно загружен на сервер</h3>";
		} else {
			echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
			exit;
		}
		echo "<h3>Информация о загруженном на сервер файле: </h3>";
		echo "<p><b>Оригинальное имя загруженного файла: " . $value . "</b></p>";
		echo "<p><b>Mime-тип загруженного файла: " . $_FILES['userfile']['type'][$key] . "</b></p>";
		echo "<p><b>Размер загруженного файла в байтах: " . $_FILES['userfile']['size'][$key] . "</b></p>";
		echo "<p><b>Временное имя файла: " . $_FILES['userfile']['tmp_name'][$key] . "</b></p>";
	}
