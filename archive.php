<html>
<head lang="ru">
<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
<link rel="shurt icon" href="img/A.png"><meta charset="utf-8">
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
    <center><h2>Архив всех программ, игр и приложений</h2></center>
	
    <div class="appdiv">
    <center>
	<h3 id="h0"><?php $h1 = 'index.html'; echo $h1;?></h3>
	<p>
	Краткое описание
	</p>
	<p>Разработчик приложения: <br /><?php $dev1 = 'Mot 0511'; echo $dev1?></p>
    <p>Платформа: <br /><?php $plat1 = 'Windows, macOS, android'; echo $plat1?></p>
    <p>Тип приложения: <br /><?php $type1 = 'Игра'; echo $type1?></p>
	<form action="">
	<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
	</form>
	<form action="users/Mot 0511/games/index.html/page.php">
	<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
	</form>
	</center>
    </div>

    <div class="appdiv">
    <center>
	<h3 id="h1"><?php $h2 = 'index.html2'; echo $h2;?></h3>
	<p>
	Краткое описание
	</p>
	<p>Разработчик приложения: <br /><?php $dev2 = 'Mot 0511'; echo $dev2?></p>
	<p>Платформа: <br /><?php $plat2 = 'Windows, macOS, android'; echo $plat2?></p>
    <p>Тип приложения: <br /><?php $type2 = 'Игра'; echo $type2?></p>

	<form>
	<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
	</form>
	<form action="users/Mot 0511/games/index.html2/page.php">
	<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
	</form>
	</center>
    </div>

    <div class="appdiv">
    <center>
	<h3 id="h2"><?php $h3 = 'index.html3'; echo $h3;?></h3>
	<p>
	Краткое описание
	</p>
	<p>Разработчик приложения: <br /><?php $dev3 = 'Mot 0511'; echo $dev3?></p>
    <p>Платформа: <br /><?php $plat2 = 'Windows, macOS, android'; echo $plat2?></p>
    <p>Тип приложения: <br /><?php $type3 = 'Игра'; echo $type3?></p>

	<form>
	<input type="submit" value="Скачать" style="position: relative; right: 50px; top: 30px; background: Royalblue; width: 90px; height: 40px;">
	</form>
	<form action="users/Mot 0511/games/index.html3/page.php">
	<input type="submit" value="Подробнее" style="position: relative; right: -40px; top: -26px; background: Darkgrey; width: 90px; height: 40px; font-size: 14px;">
	</form>
	</center>
    </div>
	
	</div>
	


</div>


</body>
</html>