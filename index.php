<html>
<head lang="ru">
<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
<link rel="shurt icon" href="img/A.png">
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<style>


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

<?php include 'shapka1.html'?>


<div class="content">

	<div style="width: 49%; height: 997px; border: solid grey 3px; position: absolute; top: 3px;">
	<center><h2>Новинки игр</h2></center>

    <div class="appdiv">
		<?php $apprate = array(); ?>
	<img src="" width="50px" height="50px" style="position: absolute;">
    <center>
	<h3 id="h0"><?php $h1 = 'index.html'; echo $h1;?></h3>
	<p>
	Краткое описание
	</p>
	<p>Разработчик приложения: <br /><?php $dev1 = 'Mot 0511'; echo $dev1?></p>
	<p>Платформа: <br /><?php $plat1 = 'Windows, macOS, android'; echo $plat1?></p>

	<p><?php $frates = file_get_contents('rates/games/'.$h1.'.txt'); $arates = explode(' ', $frates);
	$rate = array_sum($arates);
	array_push($apprate, $h1, $rate); $rate; echo 'Рейтинг приложения: '.$apprate[0];?></p>

	<form action="">
	<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
	</form>
	<form action="users/Mot 0511/games/index.html/page.php">
	<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
	</form>
	</center>
    </div>

    <div class="appdiv">
	<img src="" width="50px" height="50px" style="position: absolute;">

    <center>
	<h3 id="h1"><?php $h2 = 'index2.html'; echo $h2;?></h3>
	<p>
	Краткое описание
	</p>
	<p>Разработчик приложения: <br /><?php $dev2 = 'Mot 0511'; echo $dev2?></p>
	<p>Платформа: <br /><?php $plat2 = 'Windows, macOS, android'; echo $plat2?></p>
	<p><?php $frates = file_get_contents('rates/games/'.$h2.'.txt'); $arates = explode(' ', $frates);
	$rate = array_sum($arates);
	array_push($apprate, $h2, $rate); echo 'Рейтинг приложения: '.$apprate[1];?></p>
	<form>
	<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
	</form>
	<form action="users/Mot 0511/games/index2.html/page.php">
	<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
	</form>
	</center>
    </div>

    <div class="appdiv">
	<img src="" width="50px" height="50px" style="position: absolute;">

    <center>
	<h3 id="h2"><?php $h3 = 'index3.html'; echo $h3;?></h3>
	<p>
	Краткое описание
	</p>
	<p>Разработчик приложения: <br /><?php $dev3 = 'Mot 0511'; echo $dev3?></p>
	<p>Платформа: <br /><?php $plat2 = 'Windows, macOS, android'; echo $plat2?></p>
	<p><?php $frates = file_get_contents('rates/games/'.$h3.'.txt'); $arates = explode(' ', $frates);
	$rate = array_sum($arates);
	array_push($apprate, $h3, $rate); echo 'Рейтинг приложения: '.$apprate[2];?></p>
	<form>
	<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
	</form>
	<form action="users/Mot 0511/games/index3.html/page.php">
	<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
	</form>
	</center>
    </div>

	</div>
	<div style="width: 49%; height: 997px; border: solid grey 3px; position: absolute; left: 50%; top: 3px;">
	<center><h2>Рекомендуем</h2></center>
	<?php
	for ($i = 0; $i < 3; $i++){

	};
	?>
	</div>

</div>


</body>
</html>
