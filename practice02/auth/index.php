<?php

if(!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != '123')
{
    header('WWW-Authenticate: Basic relam="Test site"');
    header('HTTP/1.0 401 Unauth');
    die();
}
echo '<pre>';
var_export($_SERVER);
echo "<p>Hello {$_SERVER['PHP_AUTH_USER']} </p>";
echo "<p>Вы ввели пароль {$_SERVER['PHP_AUTH_PW']} </p>";
