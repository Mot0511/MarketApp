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
	$hashpass = password_hash($pass, PASSWORD_DEFAULT);
	$fdatauser = fopen('users/'.$login.'/'.$login.'.txt', 'w');
	fwrite($fdatauser, $email1.' '.$hashpass.' ');
	//$datauserpage = fopen('users/page_user.php', 'r');
	//$datauserpagesize = filesize('users/page_user.php');

	file_put_contents('users/'.$login.'/data_buy.txt', '');
	file_put_contents('users/'.$login.'/file.txt', '0');
	file_put_contents('users/'.$login.'/save_setting.php', '
	<meta charset="utf-8">
	<?php
	error_reporting(0);
	$islogin = file_get_contents(\'islogin.txt\');
	if(!$_SESSION[\'localhost/marketapp/users/Mot 0511/Mot 0511.php\']){
	  if (!$islogin == \'1\'){
	    echo \'<script type="text/javascript">location="../../regpage.php"</script>\';
	    exit;
	  }
	}
	$islogin = fopen(\'islogin.txt\', \'w\');
	fwrite($islogin, \'0\');
	?>

	');

	$userpage = fopen('users/'.$login.'/page.php', 'w');
	fwrite($userpage, '
	<?php
	error_reporting(0);
	$islogin = file_get_contents(\'islogin.txt\');
	if(!$_SESSION[\'localhost/marketapp/users/Mot 0511/Mot 0511.php\']){
	  if (!$islogin == \'1\'){
	    echo \'<script type="text/javascript">location="../../regpage.php"</script>\';
	    exit;
	  }
	}
	$islogin = fopen(\'islogin.txt\', \'w\');
	fwrite($islogin, \'0\');
	?>

	<html>
	<head lang="ru">
	<title>Аккаунт разработчика</title>
	<link rel="shurt icon" href="../../img/A.png"><meta charset="utf-8">
	<link rel="stylesheet" href="../../style.css" id="style">

	<style>


		p{color: white}
		h1{color: white;}
		h2{color: white;}
		h3{color: white;}
		h4{color: white;}
		h5{color: white;}
		h6{color: white;}

		.search{background: DarkGrey; width: 400px; height: 50px; color: white;}
		.searchbt{background: DarkGrey; width: 100px; height: 50px;}


	</style>
	</head>
	<body>
	<?php $login = \'Mot 0511\'; ?>
	<?php include \'../../shapka4.html\'; ?>

	<div class="content">
		<div class="newapps">

		<center><h2>Аккаунт разработчика</h2></center>
	    <!-- <span class="mymoney"><p>Ваш баланс: <?php echo file_get_contents(\'../../moneys/\'.$login.\'.txt\'); ?> руб.</p></span> -->
		<h3 class="myappsh">Мои игры/программы/приложения:</h3>

	    <!-- <form class="formbtaddmoney" action="" method="post">
	      <input type="submit" name="btaddmoney" class="btaddmoney" value="Пополнить баланс">
	    </form> -->

		<div class="miniappdiv">
		<img src="" class="imgapp">
		<h3><span class="happ"><?php $h1 = \'index.html\'; echo $h1;?></span></h3>
		<p><span class="minides">Краткое описание</span></p>
		<p><span class="ptype"><?php $type1 = \'game\'; echo $type1; $type1 = $type1.\'s\';?></span></p>
		<form>
			<input type="submit" class="btdownloadapp" value="Скачать приложение">
		</form>
		<form action="games/index.html/page.php">
			<input type="submit" class="btpageapp" value="Перейти на страницу приложения">
		</form>
		<form action="<?php echo $type1.\'/\'.$h1.\'/ranname.php\'; ?>" method="post">
			<input type="submit" class="btrn" value="Переименовать приложение" name="btrn">
		</form>
		<form action="<?php echo $type1.\'/\'.$h1.\'/del.php\'; ?>" method="post">
			<input type="submit" class="btdelapp" value="Удалить приложение" name="btdel">
		</form>
		</div>


		</div>
		<div class="rec">
		<center><h2>Сообщения</h2></center>


		<div class="account_setting">
		<center><h2>Настройки аккаунта</h2></center>

			<form action="save_setting.php" method="post" name="form_setting" id="form_setting">
				<input type="checkbox" id="check_true_ad" onclick="check1()" class="check_true_ad"><label class="h_true_ad" for="check_true_ad">разрешить показ рекламы на страницах ваших приложений (за это вам будет приходить прибль)</label>
				<div id="input_data_qivy" class="input_data_qivy">

				</div>
				<script type="text/javascript">
	        var ischeck = document.getElementById(\'check_true_ad\')
	        if (ischeck.checked){
	          document.getElementById(\'input_data_qivy\').innerHTML = \'<input type="tel" class="name" name="data_buy" placeholder="Введите номер телефона QIWY кошелька"><br /><input type="button" class="name" onclick="yandex_mod()" value="Использовать Яндекс.Кошелёк">\'
	        }
	        else{
	          document.getElementById(\'input_data_qivy\').innerHTML = \'\'
	        }
					function check1(){
	          var ischeck = document.getElementById(\'check_true_ad\')
						if (ischeck.checked){
							document.getElementById(\'input_data_qivy\').innerHTML = \'<input type="tel" class="name" name="data_buy" placeholder="Введите номер телефона QIWY кошелька"><br /><input type="button" class="name" onclick="yandex_mod()" value="Использовать Яндекс.Кошелёк">\'
						}
	          else{
	            document.getElementById(\'input_data_qivy\').innerHTML = \'\'
	          }
					}
	        function yandex_mod(){
	          document.getElementById(\'input_data_qivy\').innerHTML = \'<input type="number" class="name" name="data_buy" placeholder="Введите номер Яндекс Кошелька"><br /><input type="button" class="name" onclick="qiwy_mod()" value="Использовать QIWY кошелёк">\'
	        }
	        function qiwy_mod() {
	          document.getElementById(\'input_data_qivy\').innerHTML = \'<input type="tel" class="name" name="data_buy" placeholder="Введите номер телефона QIWY кошелька"><br /><input type="button" class="name" onclick="yandex_mod()" value="Использовать Яндекс.Кошелёк">\'

	        }

				</script>

	      <?php
	      $txtfile = file_get_contents(\'file.txt\');
	      if ($txtfile == 1){
	        echo \'<script type="text/javascript">
	        document.form_setting.check_true_ad.checked = true;
	        </script>\';
	      }
	      ?>
	      <input type="submit" value="Сохранить изменения в настройках" class="save_setting_account">

			</form>


		</div>

		</div>

	</div>
	<script type="text/javascript">
	var width = document.documentElement.clientWidth;
	if (width < 1000){
		var tagstyle = document.getElementById(\'style\');
		tagstyle.setAttribute(\'href\', \'../../mstyle.css\');
	}
	</script>


	</body>
	</html>

	');
	file_put_contents('moneys/'.$login.'.txt', '0');
	$islogin = fopen('users/'.$login.'/islogin.txt', 'w');
	fwrite($islogin, '1');
	echo '<script type="text/javascript">location="users/'.$login.'/page.php"</script>';
}else echo 'Пользователь с таким логином уже существует <a href="regpage.php">Вернуться на страницу регистрации</a>'
?>
