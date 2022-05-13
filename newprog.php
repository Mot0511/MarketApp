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

$input_price = $_POST['input_price'];

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





if ($datas[0] == $email and password_verify($pass, $datas[1])) {

	if (is_dir('users/'.$login.'/'.$ischeck.'/'.$name)){
		echo 'Такая игра у вас уже опубликована'; exit;
	} else {
		mkdir('users/'.$login.'/'.$ischeck.'/'.$name);
		mkdir('users/'.$login.'/'.$ischeck.'/'.$name.'/screenshots');
		mkdir('users/'.$login.'/'.$ischeck.'/'.$name.'/iptimeout');
	}


	move_uploaded_file($_FILES['file']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'dist.exe');

	move_uploaded_file($_FILES['icon']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'icon.png');

	move_uploaded_file($_FILES['screensh1']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh1.png');

	move_uploaded_file($_FILES['screensh2']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh2.png');

	move_uploaded_file($_FILES['screensh3']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh3.png');

	move_uploaded_file($_FILES['screensh4']['tmp_name'], 'users/'.$login.'/'.$ischeck.'/'.$name.'/'.'screenshots'.'/'.'screensh4.png');

	$sk1 = '"';
	$pathrate = '"../../../../rates/'.$ischeck.'/'.$name.'.txt"';

	file_put_contents('rates/'.$ischeck.'/'.$name.'.txt', ' ');
	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/writerate.php', "


		<meta charset='utf-8'>
		<?php
		\$userip = \$_SERVER['REMOTE_ADDR'];

		date_default_timezone_set('UTC');
		\$todayday = date('j');
		\$todaymonth = date('n');
		\$year = date('Y');

		settype(\$todayday, 'integer');
		\$day = \$todayday + 3;
		\$todayday = \$todayday + 3;

		\$data = \$todayday.' '.\$todaymonth.' '.\$year;

		/*
		if (\$day >= 30){
			\$day -= 30;
			\$month = \$todeymonth + 1;
			if (file_exists('iptimeout/'.\$userip.'.txt')){
				\$datafile = file_get_contents('iptimeout/'.\$userip.'.txt');
				\$datas = explode(\$datas, ' ');

				if (\$datas[0] <= \$day and \$datas[1] <= \$month){
					\$rate = \$_POST['rate'];
					\$ratefile = fopen(\"rates/games/app1.txt\", 'a');
					fwrite(\$ratefile, \$rate.' ');
					fclose(\$ratefile);
					echo 'Рейтинг поставлен <a href=\'page.php\'>Вернуться на страницу приложения</a>';
				} else{
					echo 'Вы недавно уже ставили рейтинг';
					exit;
				}
			} else {

				\$data = \$day.' '.\$month.' '.\$year;
				file_put_contents('iptimeout/'.\$userip.'.txt', ' ');
				\$datafile = fopen('iptimeout/'.\$userip.'.txt', 'w');
				fwrite(\$datafile, \$data);
				fclose(\$datafile);

				\$rate = \$_POST['rate'];
				\$ratefile = fopen(\"../../../../rates/games/app1.txt\", 'a');
				fwrite(\$ratefile, \$rate.' ');
				fclose(\$ratefile);
				echo 'Рейтинг поставлен <a href=\'page.php\'>Вернуться на страницу приложения</a>';

			}

		}

	*/








		if (file_exists('iptimeout/'.\$userip.'.txt')){

			\$datafile = file_get_contents('iptimeout/'.\$userip.'.txt');
			\$datas = explode(' ', \$datafile);

			if (\$datasday < \$todayday and \$datas[1] < \$todayday){
				\$datafile = fopen('iptimeout/'.\$userip.'.txt', 'w');
				fwrite(\$datafile, \$data);
				fclose(\$datafile);

				\$rate = \$_POST['rate'];
				\$ratefile = fopen(\"../../../../rates/games/".$name.".txt\", 'a');
				fwrite(\$ratefile, \$rate.' ');
				fclose(\$ratefile);
				echo 'Рейтинг поставлен <a href=\'page.php\'>Вернуться на страницу приложения</a>';
				exit;

			} else {
				echo 'Вы недавно уже ставили рейтинг';
				exit;

			}
		} else {

			file_put_contents('iptimeout/'.\$userip.'.txt', ' ');
			\$datafile = fopen('iptimeout/'.\$userip.'.txt', 'w');
			fwrite(\$datafile, \$data);
			fclose(\$datafile);


			\$rate = \$_POST['rate'];
			\$ratefile = fopen(\"../../../../rates/games/".$name.".txt\", 'a');
			fwrite(\$ratefile, \$rate.' ');
			fclose(\$ratefile);
			echo 'Рейтинг поставлен <a href=\'page.php\'>Вернуться на страницу приложения</a>';
			exit;

		}



		?>


	");

	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/del.php', '
	<link rel="stylesheet" href="../../../../style.css">
	<meta charset="utf-8">
	<form action="../../'.$login.'.php">
	  <h1>Вы уверены, что хотите удалить приложение?</h1>
	  <input type="submit" value="Вренуться в свой аккаунт" name="return" class="return">
	  </form>
	  <form action="" method="post">
	  <input type="submit" value="Подтвердить удаление приложения" name="cancel" class="canceldel">
	</form>
	<?php
	if (isset($_POST[\'cancel\'])){
	  $start = start();
	}
	function start(){
	  $name = \''.$name.'\';
	  $dev = \''.$login.'\';

	  $email = \'redstoun.mod@yandex.ru\';
	  $heading = \'Удаление приложения\';
	  $text = \'Разработчик: \'.$dev.\' Название удаляемого приложения: \'.$name;
	  mail($email, $heading, $text);
	  echo \'Заявка на удаление успешно отправлена\';

	}

	?>


	');

	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/ranname.php', '
	<link rel="stylesheet" href="../../../../style.css" type="text/css">
	<meta charset="utf-8">
	<form action="" method="post">
	  <h1>Напишите новое название приложения</h1>
	  <input type="text" name="newname" placeholder="Напишите новое название здесь"  class="newname" required><br />
	  <input type="submit" value="Переименовать приложение" name="ranname" class="ranname">
	</form>
	<?php
	if (isset($_POST[\'ranname\'])){
	  $name = \''.$name.'\';
	  $newname = $_POST[\'newname\'];
	  $dev = "'.$login.'";

	  $email = \'redstoun.mod@yandex.ru\';
	  $heading = \'Переименование приложения\';
	  $text = \'Разработчик: "\'.$dev.\'" Старое название приложения: "\'.$name.\'" Новое название приложение: "\'.$newname.\'"\';
	  mail($email, $heading, $text);
	  echo \'Заявка на переименование приложение успешно отправлена\';
	}
	?>


	');

	$email = 'redstoun.mod@yandex.ru';
	$title = 'Добавление приложения на MarketApp';
	$message = 'Логин разработчика: '.$login. ' Название приложения: '.$name.' Тип приложения: '.$ischeck.' Платформа: '.$isplat.' Описание приложения: '.$des.' Краткое описание приложения: '.$minides.' Системные требования: '.$systreb.' Цена приложения: '.$input_price;
	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/page.php', '


		<html>
		<head lang="ru">
		<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
		<link rel="shurt icon" href="../../../../img/A.png">
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../../../style.css" id="style">
		<style>


		p{color: white;}
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

		<div class="content">
		<img src="" class="appicon">
		<h3><span class="appsystrebh">Системные требования</span></h3>
		<p>
		<span class="appsystreb">
		Здесь системные требования
		</p>
		<h1><span class="appheading">Название приложения</span></h1>
		<p><span class="apptype">тип приложения/платформа</span></p>
		<p><span class="appdes">Описание приложения</span></p>

		<h3><span class="screenshh">Скриншоты</span></h3>
		<div class="screenshdiv">
		<img src="" width="300px;" height="150px;" class="screensh1">
		<img src="" width="300px;" height="150px;" class="screensh2">
		<img src="" width="300px;" height="150px;" class="screensh3">
		<img src="" width="300px;" height="150px;" class="screensh4">


		<center><h3><span class="rateh">Поставте рейтинг</span></h3></center>
		<form method="post" action="writerate.php" id="rateform">
		<input type="submit" value="Поставить рейтинг" class="btrate">
		</form>
		<select form="rateform" name="rate" class="rselect">
		<option value="5">5</option>
		<option value="4">4</option>
		<option value="3">3</option>
		<option value="2">2</option>
		<option value="1">1</option>
		</select>

		<form action="">
		<input type="button" value="Скачать" class="btdownload">
		</form>

		</div>
		</div>

		<script type="text/javascript">
		var width = document.documentElement.clientWidth;
		if (width < 1000){
			var tagstyle = document.getElementById(\'style\');
			tagstyle.setAttribute(\'href\', \'../../../../mstyle.css\');
			//document.getElementById(\'heading\').innerHTML = width;
		}
		</script>

		</body>
		</html>
');

	file_put_contents('users/'.$login.'/'.$ischeck.'/'.$name.'/buy.php', '
	<html>
	<head lang="ru">
	<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
	<link rel="shurt icon" href="img/A.png"><meta charset="utf-8">
	<link rel="stylesheet" href="../../../../style.css">
	<script type="text/javascript" src="../../../../jquery.js"></script>
	<style>

	  .name{width: 400px; height: 40px; background: darkgrey;}
	  .weybuy{width: 200px; height: 40px; background: darkgrey;}
	  .hemail{width: 400px;}


		.shapka{background: dimgrey; height: 100px; width: 100%; position: absolute; left: 0px; top: 0px;}
		.btaccount{background: DarkGrey; height: 50px; width: 250px; position: absolute; right: 25px; top: 25;}

		.search{background: DarkGrey; width: 300px; height: 50px; color: white;}
		.searchbt{background: DarkGrey; width: 60px; height: 50px;}


	</style>
	</head>
	<body>
	<?php include \'../../../../shapka3.html\'; ?>
	<div class="content" id="content">
	    <center><h2>Покупка игры/программы/приложения</h2></center>
	    <center><div class="buydiv">
	      <form class="buyform" action="" method="post">
	        <input type="text" name="name" class="name" placeholder="Введите ваше имя:" required>
	        <h3>Выберите способ оплаты</h3>
	        <button type="button" name="button" class="weybuy" onclick="yandex()" require>Яндекс.Деньги</button>
	        <button type="button" name="button" class="weybuy" onclick="qiwy()" require>Qiwy кошелёк</button>
	        <div class="number" id="number">
	          <input type="number" placeholder="Введите номер вашего Яндекс Кошелька" class="name" required>
	        </div>
	        <script type="text/javascript">
	          function yandex(){
	            document.getElementById(\'number\').innerHTML = \'\';
	            $(\'.number\').append(\'<input type="number" class="name" placeholder="Введите номер вашего Яндекс Кошелька" required>\');
	          }
						function qiwy(){
	            document.getElementById(\'number\').innerHTML = \'\';
	            $(\'.number\').append(\'<input type="tel" class="name" placeholder="Введите номер телефона вашего Qiwy кошелька" required>\');
	          }
	        </script>

	        <h3 class="hemail">Введите ваше почту, чтобы на неё отправить товар и документ о его покупке</h3>
	        <input type="email" name="" placeholder="Введите ваше почту здесь" class="name" required>
	        <h2>К оплате: 20 рублей</h2>
	        <input type="submit" name="buy" value="Оплатить и получить приложение" class="name">
	      </form>
	    </div></center>

	</div>
	<?php include \'../../../../footer.html\'; ?>


	</body>
	</html>

	');
	mail($email, $title, $message);

	echo 'Игра/Программа/Приложение отправлено на проверку. После проверки игра/программа/приложение будет опубликовано в открытом доступе';
}else echo 'Неправильная почта или пароль';

?>
