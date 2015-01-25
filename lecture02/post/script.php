<?php
	// Выводим HTML-заголовки:
	echo '<html>';
	echo '<head>';
	echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
	echo '<title>Test Form  </title>';
	echo '</head>';
	echo '<body>';
	echo '<h3>Тестовая форма</h3>';
	echo "<p>Переданное значение текстового поля: <b>" . $_POST['textfield'] . "</b></p>";
	echo "<p>Переданное значение поля пароля: <b>" . $_POST['pswfield'] . "</b></p>";
	echo "<p>Переданное значение скрытого поля hidden: <b>" . $_POST['hidden'] . "</b></p>";
	echo '<hr size="1">';
	echo '<p>Были включены следующие независимые переключатели: </p>';
	if (isset($_POST['checkbox1'])) echo "<p><b>Первый</b></p>";
	if (isset($_POST['checkbox2'])) echo "<p><b>Второй</b></p>";
	if (isset($_POST['checkbox3'])) echo "<p><b>Третий</b></p>";
	echo '<hr size="1">';

	if (isset($_POST['radiobutton'])) {
		echo '<p>Был выбран независимый переключатель со следующим значением: ';
		if ($_POST['radiobutton'] === "yes") echo "<b>Yes</b>";
		if ($_POST['radiobutton'] === "no") echo "<b>No</b>";
		echo '</p>';
	}
	else echo '<p>Ни один из независимых переключателей не был выбран</p>';
	echo '<hr size="1">';
	echo '<p>Значение многострочного текстового поля :</p>';
	echo "<p><b>" . $_POST['textarea'] . "</b></p>";
	echo '<hr size="1">';
	echo "<p>Значение списка с единственным выбором: <b>" . $_POST['day_s'] . "</b></p>";
	echo '<hr size="1">';
	echo '<p>Значения списка с множественным выбором: </p>';
	foreach ($_POST['day_m'] as $keys=>$values) echo "<b>$values</b><br>";
	echo '<hr size="1">';
	echo '</body>';
	echo '</html>';
