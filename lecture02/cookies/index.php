<?php
	if (isset($_COOKIE['test'])) {
		echo @$_COOKIE['test'] . ' авторизован';
	} else {
		header('Location: ' . 'signin.html'); 
	}