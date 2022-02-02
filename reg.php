<meta charset="utf-8">
<?php
$login = $_POST['login'];
$email1 = $_POST['email1'];
$pass = $_POST['pass'];

if (!is_dir('users/'.$login) ){
	mkdir('users/'.$login);
	mkdir('users/'.$login.'/games');
	mkdir('users/'.$login.'/progs');
	mkdir('users/'.$login.'/apps');
	mkdir('users/'.$login.'/others');
	$fdatauser = fopen('users/'.$login.'/'.$login.'.txt', 'w');
	fwrite($fdatauser, $email1.' '.$pass.' ');
	$datauserpage = fopen('users/page_user.php', 'r');
	$datauserpagesize = filesize('users/page_user.php');
	$userpage = fopen('users/'.$login.'/'.$login.'.php', 'w');
	fwrite($userpage, fread($datauserpage, $datauserpagesize));
	include 'users/'.$login.'/'.$login.'.php';
}else echo 'Пользователь с таким логином уже существует <a href="regpage.php">Вернуться на страницу регистрации</a>'
?>