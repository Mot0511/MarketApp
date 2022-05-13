<meta charset="utf-8">

<?php
$login = $_POST['login'];
$email1 = $_POST['email1'];
$pass = $_POST['pass'];

if (!is_dir('users/'.$login)){
	echo 'Такого аккаунта не существует <a href="regpage.php">Вернуться на страницу регистрации</a>';
	exit;
} else
	$fdatauser = fopen('users/'.$login.'/'.$login.'.txt', 'r');
	$filesize = filesize('users/'.$login.'/'.$login.'.txt');
	$datauser = fread($fdatauser, $filesize);
	$datas = explode(' ', $datauser);

if ($datas[0] == $email1 and password_verify($pass, $datas[1])) {
	$islogin = fopen('users/'.$login.'/islogin.txt', 'w');
	fwrite($islogin, '1');

	echo '<script type="text/javascript"> location="users/'.$login.'/page.php"; </script>';
}else echo 'Неправильная почта или пароль';
?>
