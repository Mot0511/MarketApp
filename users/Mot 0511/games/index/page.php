
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

	<?php include "../../../../shapka1.html"?>

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
		<select form="rateform" style="background: DarkGrey; width: 120px; height: 50px; position: absolute; left: 180px; top: 350px;">
		<option>5</option>
		<option>4</option>
		<option>3</option>
		<option>2</option>
		<option>1</option>
		</select>

		<form action="">
		<input type="button" value="Скачать" style="background: Royalblue; width: 263px; height: 50px; position: absolute; left: 180px; top: 410px;">
		</form>

		</div>
	</div>


	</body>
	</html>	