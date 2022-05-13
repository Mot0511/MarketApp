<html>
<head lang="ru">
<meta charset="utf-8">
<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
<meta name="keywords" content="MarketApp, marketapp, магазин, магазин приложений,
marketapp client proxy,
marketapp client прокси,
marketapp cs go,
marketapp p2p,
marketapp p2p для яндекс браузера,
marketapp p2p opera,
marketapp p2p расширение,
marketapp p2p расширение скачать,
marketapp p2p расширение яндекс,
marketapp p2p установить,
marketapp p2p яндекс,
расширение marketapp,
скачать marketapp,
скачать marketapp client,
скачать marketapp p2p,
установить marketapp,
установить marketapp client

как называется магазин приложений,
бесплатный магазин приложений,
вайлдберриз интернет магазин приложение,
валберис интернет магазин приложение
виндовс магазин приложений,
гугл магазин приложений,
интернет магазин бесплатных приложений,
лучший магазин приложений,
магазин мобильных приложений,
магазин приложение телефона,
магазин приложений,
магазин приложений для андроид,
магазин приложений android,
магазин приложений huawei,
магазин приложений store,
магазин приложений windows,
магазин приложений андроид скачать бесплатно,
магазин приложений самсунг,
магазин приложений сбербанка,
магазин приложений смарт,
магазин приложений хром,
магазины через приложение,
найти магазины приложений,
официальный магазин приложений,
официальный сайт магазин приложений,
приложение для карт магазинов,
приложение для карт магазинов на телефон,
приложение для карточек магазинов,
приложение интернет магазин,
приложение магазин скачать телефон,
приложение магазин товаров,
приложение магазина магнит,
приложение магазина пятерочка,
приложение скидки в магазинах,
приложения магазинов одежды,
русский магазин приложений,
сайт приложений магазинов,
скачать бесплатно магазин приложений,
скачать бесплатно приложение интернет магазин,
скачать интернет магазин бесплатно валберис приложение,
скачать магазин приложений,
скачать магазин приложений для андроид,
скачать официальный магазин приложений,
скачать приложение валберис интернет магазин,
скачать приложение интернет магазин,
скачать приложение магазин валберис,
тв магазин приложение,
установить магазин приложений,
яндекс магазин приложений

">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(66903151, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/66903151" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<link rel="shurt icon" href="img/A.png"><meta charset="utf-8">
<link rel="stylesheet" href="style.css" id="style">
<script type="text/javascript" src="jquery.js"></script>
<style>
	.shapka{background: dimgrey; height: 100px; width: 100%; position: absolute; left: 0px; top: 0px;}
	.btaccount{background: DarkGrey; height: 50px; width: 290px; position: absolute; right: 0px; top: 25;}


</style>
</head>
<body>

	<div>
	<meta name="yandex-verification" content="7369013ca3836a33" />
	<meta charset="utf-8">
	<div class="shapka" id="shapka">
		<img src="img/A.png" align="left" class="iconsite">
		<h2><span id="heading" class="heading">MarketApp - сайт где за публикацию программ, игр или приложений деньги не просят</span></h2>

		<div id="divsearch" class="divsearch">
			<input type="text" placeholder="Поиск" class="search" name="search" id="search">
			<button type="button" class="searchbt" name="btsearch" onClick=search()>Найти</button>
		</div>
		<script type="text/javascript">
				function search(){
					var text = document.getElementById('search').value;
					var app = document.getElementById(text);
					if (!app){
						document.getElementById('content').innerHTML = "";
						$('.content').append('<center><h2>По вашему запросу ничего не найдено</h2></center>')
						document.getElementById('divsearch').innerHTML = "<center><button style='background: darkgrey; position: absolute; left: 100px; top: 20px; width: 100px;' onclick=ra()>Вернуться назад</button>";

					}
					else{
						var app = document.getElementById(text).innerHTML;
						if (text == " "){
							location.reload();
						} else {
							document.getElementById('content').innerHTML = "";
							$('.content').append('<center><h2>Результаты поиска</h2></center>')
							$('.content').append(app);
							document.getElementById('divsearch').innerHTML = "<center><button style='background: darkgrey; position: absolute; left: 100px; top: 20px; width: 100px;' onclick=ra()>Вернуться назад</button>";

						}
					}

					}
					function ra(){
						location.reload();
					}
		</script>

		<form action="regpage.php" class="formaccount">
		<input type="submit" class="btaccount" value="Войти/зарегистрироваться в аккаунт">
		</form>

	</div>
	</div>
	<div class="menu" id="menu" align="center">
	<a href="index.php"><h2><span style="" class="em1">Игры</span></h2></a>
	<a href="prog.php"><h2><span style="" class="em2">Программы</span></h2></a>
	<a href="app.php"><h2><span style="" class="em3">Приложения</span></h2></a>
	<a href="other.php"><h2><span style="" class="em4">Другое</span></h2></a>
	<a href="archive.php"><h2><span style="" class="em5">Архив всех программ, игр и приложений</span></h2></a>

	</div>

<div class="content" id="content">
    <center><h2>Архив всех программ, игр и приложений</h2></center>
		<?php $apprate = array() ?>

		<?php $h1 = 'app1';?>
		<div id="app1">
		<div class="appdiv" id="app1">
		<img src="" width="50px" height="50px" style="position: absolute;">
		<center>
		<h3 id="h0"><?php echo $h1;?></h3>
		<p>
		Краткое описание
		</p>
		<p>Разработчик приложения: <br /><?php $dev1 = 'Mot 0511'; echo $dev1?></p>
		<p>Платформа: <br /><?php $plat1 = 'Windows, macOS, android'; echo $plat1?></p>

		<p><?php $frates = file_get_contents('rates/games/'.$h1.'.txt'); $arates = explode(' ', $frates);
		$rate = array_sum($arates);
		array_push($apprate, $rate);
		echo 'Рейтинг приложения: '.$apprate[0];?></p>

		<form action="">
		<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
		</form>
		<form action="users/Mot 0511/games/<?php $h1 ?>/page.php">
		<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
		</form>
		</center>
		</div>
		</div>

		<?php $h2 = 'app2';?>
		<div id="app2">
		<div class="appdiv" id="app2">
		<img src="" width="50px" height="50px" style="position: absolute;">
		<center>
		<h3 id="h0"><?php echo $h2;?></h3>
		<p>
		Краткое описание
		</p>
		<p>Разработчик приложения: <br /><?php $dev1 = 'Mot 0511'; echo $dev1?></p>
		<p>Платформа: <br /><?php $plat1 = 'Windows, macOS, android'; echo $plat1?></p>

		<p><?php $frates = file_get_contents('rates/games/'.$h2.'.txt'); $arates = explode(' ', $frates);
		$rate = array_sum($arates);
		array_push($apprate, $rate);
		echo 'Рейтинг приложения: '.$apprate[1];?></p>

		<form action="">
		<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
		</form>
		<form action="users/Mot 0511/games/<?php $h2 ?>/page.php">
		<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
		</form>
		</center>
		</div>
		</div>

		<?php $h3 = 'app3';?>
		<div id="app3">
		<div class="appdiv" id="app3">
		<img src="" width="50px" height="50px" style="position: absolute;">
		<center>
		<h3 id="h0"><?php echo $h3;?></h3>
		<p>
		Краткое описание
		</p>
		<p>Разработчик приложения: <br /><?php $dev1 = 'Mot 0511'; echo $dev1?></p>
		<p>Платформа: <br /><?php $plat1 = 'Windows, macOS, android'; echo $plat1?></p>

		<p><?php $frates = file_get_contents('rates/games/'.$h3.'.txt'); $arates = explode(' ', $frates);
		$rate = array_sum($arates);
		array_push($apprate, $rate);
		echo 'Рейтинг приложения: '.$apprate[2];?></p>

		<form action="">
		<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
		</form>
		<form action="users/Mot 0511/games/<?php $h3 ?>/page.php">
		<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
		</form>
		</center>
		</div>
		</div>


	</div>



</div>
<?php include 'footer.html'; ?>
<script type="text/javascript">
var width = document.documentElement.clientWidth;
if (width < 1000){
	var tagstyle = document.getElementById('style');
	tagstyle.setAttribute('href', 'mstyle.css');
	//document.getElementById('heading').innerHTML = width;
}
</script>


</body>
</html>
