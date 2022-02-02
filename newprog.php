<meta charset="utf-8">
<?php
error_reporting( E_ERROR );
$name = $_POST['name'];
$des = $_POST['des'];
$minides = $_POST['minides'];
$check1 = $_POST['check1'];
$check2 = $_POST['check2'];
$check3 = $_POST['check3'];
$check4 = $_POST['check4'];

$plat1 = $_POST['plat1'];
$plat2 = $_POST['plat2'];
$plat3 = $_POST['plat3'];
$plat4 = $_POST['plat4'];

$systreb = $_POST['systreb'];

$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$fdatauser = fopen('users/'.$login.'/'.$login.'.txt', 'r');
$filesize = filesize('users/'.$login.'/'.$login.'.txt');
$datauser = fread($fdatauser, $filesize);
$datas = explode(' ', $datauser);

if ($check1 == 'on'){
	$ischeck = 'games';
}
elseif ($check2 == 'on'){
	$ischeck = 'progs';
}
elseif ($check3 == 'on'){
	$ischeck = 'apps';
}
elseif ($check4 == 'on'){
	$ischeck = 'others';
};

if (is_dir('users/'.$login.'/'.$ischeck.'/'.$name)){
	echo 'Такая игра у вас уже опубликована'; exit;
} else 	mkdir('users/'.$login.'/'.$ischeck.'/'.$name); mkdir('users/'.$login.'/'.$ischeck.'/'.$name.'/screenshots');

if ($plat1 == 'on'){
	$isplat = 'winsows';
}
elseif ($plat2 == 'on'){
	$isplat = 'macOS';
}
elseif ($plat3 == 'on'){
	$isplat = 'android';
}
elseif ($plat4 == 'on'){
	$isplat = 'linux';
};





if ($datas[0] == $email and $datas[1] == $pass) {
	move_uploaded_file($_FILES['file']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'dist.exe');

	move_uploaded_file($_FILES['icon']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'icon.png');

	move_uploaded_file($_FILES['screensh1']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh1.png');

	move_uploaded_file($_FILES['screensh2']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh2.png');

	move_uploaded_file($_FILES['screensh3']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh3.png');

	move_uploaded_file($_FILES['screensh4']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh4.png');

	$sk1 = '"';
	$pathrate = '"../../../../rates/type/name.txt"';

	file_put_contents('rates/'.$ischeck.'/'.$name.'.txt', ' ');
	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/writerate.php', "
	<meta charset='utf-8'>
	<?php
	\$rate = \$_POST['rate'];
	\$ratefile = fopen($pathrate, 'a');
	fwrite(\$ratefile, \$rate.' ');
	fclose(\$ratefile);
	echo 'Рейтинг поставлен <a href=\'page.php\'>Вернуться на страницу приложения</a>';
	?>
	");

	$email = 'redstoun.mod@yandex.ru';
	$title = 'Добавление приложения на MarketApp';
	$message = 'Логин разработчика: '.$login. ' Название приложения: '.$name.' Тип приложения: '.$ischeck.'Платформа: '.$isplat.' Описание приложения: '.$des.' Краткое описание приложения: '.$minides.'Системные требования: '.$systreb;
	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/page.php', '
	<html>
	<head lang="ru">
	<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
	<link rel="shurt icon" href="../../../../img/A.png">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../../../style.css">
	<style>
	.shapka{background: DimGray; height: 100px; width: 100%; position: absolute; left: 0px; top: 0px;}
	.menu{background: Gray; width: 100%; height: 50px; position: absolute; left: 0px; top: 100px;}
	.content{background: DimGray; height: 1000px; width: 100%; position: absolute; left: 0px; top: 150px;}
	.btaccount{background: DarkGrey; height: 50px; width: 250px; position: absolute; right: 25px; top: 25;}


	p{color: white}
	h1{color: white;}
	h2{color: white;}
	h3{color: white;}
	h4{color: white;}
	h5{color: white;}
	h6{color: white;}

	.search{background: DarkGrey; width: 300px; height: 50px; color: white;}
	.searchbt{background: DarkGrey; width: 100px; height: 50px;}

	</style>
	</head>
	<body>

	<?php include "../../../../shapka3.html"?>

	<div class="menu">
	<a href="../../../../index.php"><h2><span style="position: absolute; left: 400px; top: 5px;">Игры</span></h2></a>
	<a href="../../../../prog.php"><h2><span style="position: absolute; left: 500px; top: 5px;">Программы</span></h2></a>
	<a href="../../../../app.php"><h2><span style="position: absolute; left: 670px; top: 5px;">Приложения</span></h2></a>
	<a href="../../../../other.php"><h2><span style="position: absolute; left: 850px; top: 5px;">Другое</span></h2></a>

	</div>
	<div class="content">
	<img src="" width="200px" height="200px" style="position: absolute; left: 25px; top: 25px;">
	<h3><span style="position: absolute; left: 25px; top: 240px;">Системные требования</span></h3>
	<p>
	<span style="position: absolute; left: 25px; top: 280px;">
	Здесь системные требования
	</p>
	<h1><span style="position: absolute; left: 250px; top: 25px;">Название приложения</span></h1>
	<p><span style="position: absolute; left: 580px; top: 31px;">тип приложения/платформа</span></p>
	<p><span style="position: absolute; left: 250px; top: 70px;">Описание приложения</span></p>

	<h3><span style="position: absolute; left: 250px; top: 220px;">Скриншоты</span></h3>
	<div style="position: absolute; left: 250px; top: 250px;">
	<img src="" width="300px;" height="150px;" style="position: absolute; left: 0px; top: 0px;">
	<img src="" width="300px;" height="150px;" style="position: absolute; left: 310px; top: 0px;">
	<img src="" width="300px;" height="150px;" style="position: absolute; left: 0px; top: 160px;">
	<img src="" width="300px;" height="150px;" style="position: absolute; left: 310px; top: 160px;">

	<center><h3><span style="position: absolute; left: 150px; top: 320px; width: 300px; ">Поставте рейтинг</span></h3></center>
	<form method="post" action="writerate.php" id="rateform">
	<input type="submit" value="Поставить рейтинг" style="background: Darkgrey; width: 133px; height: 50px; position: absolute; left: 310px; top: 350px;">
	</form>
	<select form="rateform" name="rate" style="background: DarkGrey; width: 120px; height: 50px; position: absolute; left: 180px; top: 350px;">
	<option value="5">5</option>
	<option value="4">4</option>
	<option value="3">3</option>
	<option value="2">2</option>
	<option value="1">1</option>
	</select>

	<form action="">
	<input type="button" value="Скачать" style="background: Royalblue; width: 263px; height: 50px; position: absolute; left: 180px; top: 410px;">
	</form>

	</div>
	</div>


	</body>
	</html>
');

	mail($email, $title, $message);

	echo 'Игра/Программа/Приложение отправлено на проверку. После проверки игра/программа/приложение будет опубликовано в открытом доступе';
}else echo 'Неправильная почта или пароль';

?>
