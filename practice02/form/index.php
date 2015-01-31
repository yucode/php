<?php

function getParam($key)
{
	return (isset($_REQUEST[$key]) ? $_REQUEST[$key] : '');
}

function getSelected($key, $value)
{
    return (in_array($value, (array) getParam($key)) ? 'selected="selected"' : '');
}

function getChecked($key, $value)
{
	return (isset($_REQUEST[$key]) && $_REQUEST[$key] == $value ? 'checked="checked"' : '');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>
	<pre>
		<?php 
			if(!empty($_REQUEST)) {
				var_export($_REQUEST);
			}
		?>
	</pre>
	<p>
		<a href="index.php?field=text&multi[key1]=value1&multi[key2]=value3&check2=on&radio=value2&action=submit">Передача GET параметров по ссылке</a>
	</p>
	<p>Передача POST параметров из формы</p>
	<form action="index.php" method="post">
		<p><input type="text" name="field" value="<?php echo getParam('field'); ?>"/></p>
		<p>
			<select multiple="multiple" size="4" name="multi[]">
				<?php foreach (array('value1', 'value2', 'value3', 'value4') as $value) { ?>
					<option value="<?php echo $value; ?>" <?php echo getSelected('multi', $value); ?>><?php echo $value; ?></option>
				<?php } ?>
			</select>
		</p>
		<p>
			<?php foreach (array('check1', 'check2', 'check3') as $value) { ?>
				<input type="checkbox" name="<?php echo $value; ?>" <?php echo ('' == (getParam($value)) ? '' : 'checked="checked"'); ?>/>
			<?php } ?>
		</p>
		<p>
			<?php foreach (array('value1', 'value2', 'value3') as $value) { ?>
				<input type="radio" <?php echo getChecked('radio', $value); ?> name="radio" value="<?php echo $value; ?>"/>
			<?php } ?>
		</p>
		<p><button>Submit</button></p>
	</form>
	<hr/>

</body>
</html>