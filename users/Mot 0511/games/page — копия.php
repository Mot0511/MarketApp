<html>
<head lang="ru">
<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
<link rel="shurt icon" href="../../../../img/A.png">
<meta charset="utf-8">
<link rel="stylesheet" href="../../../style.css">
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

<?php include '../../../../shapka1.html'?>

<div class="menu">
<a href="../../../../index.php"><h2><span style="position: absolute; left: 400px; top: 5px;">Игры</span></h2></a>
<a href="../../../../prog.php"><h2><span style="position: absolute; left: 500px; top: 5px;">Программы</span></h2></a>
<a href="../../../../app.php"><h2><span style="position: absolute; left: 670px; top: 5px;">Приложения</span></h2></a>
<a href="../../../../other.php"><h2><span style="position: absolute; left: 850px; top: 5px;">Другое</span></h2></a>

</div>
<div class="content">
	<img src="" width="200px" height="200px" class="iconpageapp">
	<h3><span class="systreb">Системные требования</span></h3>
	<p>
	Здесь системные требования
	</p>
	<h1><span class="happ">Название приложения</span></h1>
	<p><span class="desapp">Описание приложения</span></p>
	
	<h3 class="hscreen">Скриншоты</h3>
	<div class="divscreen">
	<img src="" width="300px;" height="150px;" class="screen1">
	<img src="" width="300px;" height="150px;" class="screen2">
	<img src="" width="300px;" height="150px;" class="screen3">
	<img src="" width="300px;" height="150px;" class="screen4">
	
	<center><h3><span class="hrate">Поставте рейтинг</span></h3></center>
	<form method="post" action="writerate.php" id="rateform">
	<input type="submit" value="Поставить рейтинг" class="btrate">
	</form>
	<select form="rateform" class="selectrate">
	<option>5</option>
	<option>4</option>
	<option>3</option>
	<option>2</option>
	<option>1</option>
	</select>
	
	<form action="">
	<input type="button" value="Скачать" class="btdownload">
	</form>	
	
	</div>	
</div>


</body>
</html>