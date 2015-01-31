<?php

$msg = '';
if (!empty($_FILES))
{
	$uploadfile = './' . basename($_FILES['newfile']['name']);
	if (move_uploaded_file($_FILES['newfile']['tmp_name'], $uploadfile)) {
		$msg = 'Файл корректен и был успешно загружен.';
	}
	else {
		echo 'Ошибка файловой загрузки!';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<p><?php echo $msg; ?></p>
	<pre>
		<?php
			if(!empty($_FILES)) {
				var_export($_FILES);
			}
		?>
	</pre>

	<form enctype="multipart/form-data" action="index.php" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		Отправить файл: <input name="newfile" type="file" />
		<input type="submit" value="Send File" />
	</form>

</body>
</html>