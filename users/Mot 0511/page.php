<?php
//!$_SESSION['localhost/marketapp/users/Mot 0511/Mot 0511.php']
error_reporting(0);
$islogin = file_get_contents('islogin.txt');
if(0){
  if (!$islogin == '1'){
    echo '<script type="text/javascript">location="../../regpage.php"</script>';
    exit;
  }
}
$islogin = fopen('islogin.txt', 'w');
fwrite($islogin, '0');
?>
<html>
<head lang="ru">
<title>Аккаунт разработчика</title>
<link rel="shurt icon" href="../../img/A.png"><meta charset="utf-8">
<link rel="stylesheet" href="../../style.css" id="style">


</head>
<body>
<?php $login = 'Mot 0511'; ?>
<?php include '../../shapka4.html'; ?>

<div class="content">
	<div class="newapps">

	<center><h2>Аккаунт разработчика</h2></center>
    <!-- <span class="mymoney"><p>Ваш баланс: <?php echo file_get_contents('../../moneys/'.$login.'.txt'); ?> руб.</p></span> -->
	<h3 class="myappsh">Мои игры/программы/приложения:</h3>

    <!-- <form class="formbtaddmoney" action="" method="post">
      <input type="submit" name="btaddmoney" class="btaddmoney" value="Пополнить баланс">
    </form> -->

	<div class="miniappdiv">
	<img src="" class="imgapp">
	<h3><span class="happ"><?php $h1 = 'index.html'; echo $h1;?></span></h3>
	<p><span class="minides">Краткое описание</span></p>
	<p><span class="ptype"><?php $type1 = 'game'; echo $type1; $type1 = $type1.'s';?></span></p>
	<form>
		<input type="submit" class="btdownloadapp" value="Скачать приложение">
	</form>
	<form action="games/index.html/page.php">
		<input type="submit" class="btpageapp" value="Перейти на страницу приложения">
	</form>
	<form action="<?php echo $type1.'/'.$h1.'/ranname.php'; ?>" method="post">
		<input type="submit" class="btrn" value="Переименовать приложение" name="btrn">
	</form>
	<form action="<?php echo $type1.'/'.$h1.'/del.php'; ?>" method="post">
		<input type="submit" class="btdelapp" value="Удалить приложение" name="btdel">
	</form>
	</div>


	</div>
	<div class="rec">
	<center><h2>Сообщения</h2></center>


	<div class="account_setting">
	<center><h2>Настройки аккаунта</h2></center>

		<form action="save_setting.php" method="post" name="form_setting" id="form_setting">
			<input type="checkbox" name="check_true_ad" id="check_true_ad" onclick="check1()" class="check_true_ad"><label class="h_true_ad" for="check_true_ad">разрешить показ рекламы на страницах ваших приложений (за это вам будет приходить прибль)</label>
			<div id="input_data_qivy" class="input_data_qivy">

			</div>
			<script type="text/javascript">
        var ischeck = document.getElementById('check_true_ad')
        if (ischeck.checked){
          document.getElementById('input_data_qivy').innerHTML = '<input type="tel" class="name" name="data_buy" placeholder="Введите номер телефона QIWY кошелька"><br /><input type="button" class="name" onclick="yandex_mod()" value="Использовать Яндекс.Кошелёк">'
        }
        else{
          document.getElementById('input_data_qivy').innerHTML = ''
        }
				function check1(){
          var ischeck = document.getElementById('check_true_ad')
					if (ischeck.checked){
						document.getElementById('input_data_qivy').innerHTML = '<input type="tel" class="name" name="data_buy" placeholder="Введите номер телефона QIWY кошелька"><br /><input type="button" class="name" onclick="yandex_mod()" value="Использовать Яндекс.Кошелёк">'
					}
          else{
            document.getElementById('input_data_qivy').innerHTML = ''
          }
				}
        function yandex_mod(){
          document.getElementById('input_data_qivy').innerHTML = '<input type="number" class="name" name="data_buy" placeholder="Введите номер Яндекс Кошелька"><br /><input type="button" class="name" onclick="qiwy_mod()" value="Использовать QIWY кошелёк">'
        }
        function qiwy_mod() {
          document.getElementById('input_data_qivy').innerHTML = '<input type="tel" class="name" name="data_buy" placeholder="Введите номер телефона QIWY кошелька"><br /><input type="button" class="name" onclick="yandex_mod()" value="Использовать Яндекс.Кошелёк">'

        }

			</script>

      <?php
      $txtfile = file_get_contents('file.txt');
      if ($txtfile == 1){
        echo '<script type="text/javascript">
        document.form_setting.check_true_ad.checked = true;
        </script>';
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
	var tagstyle = document.getElementById('style');
	tagstyle.setAttribute('href', '../../mstyle.css');
	//document.getElementById('heading').innerHTML = width;
}
</script>


</body>
</html>
