<html>
<head lang="ru">
<title>Аккаунт разработчика <?php echo $login ?></title>
<link rel="shurt icon" href="img/A.png"><meta charset="utf-8">
<link rel="stylesheet" href="style.css">

<style>
	.shapka{background: DimGray; height: 100px; width: 100%; position: absolute; left: 0px; top: 0px;}
	.menu{background: Gray; width: 100%; height: 50px; position: absolute; left: 0px; top: 100px;}
	.content{background: DimGray; height: 1000px; width: 100%; position: absolute; left: 0px; top: 150px;}ф
	
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

<?php include 'users/shapka2.html'; ?> 

<div class="content">
	<div style="width: 49%; height: 997px; position: absolute; top: 3px;">

	<center><h2>Аккаунт <?php echo $login ?></h2></center>
	<h3 style="position: absolute; left: 10px; top: 60px;">Мои игры/программы/приложения:</h3>

	<div class="miniappdiv">
	<img src="" width="50px" height="50px" class="imgapp">
	<h3><span class="happ">Название приложения</span></h3>
	<p><span class="minides">Краткое описание</span></p>
	<form>
		<input type="submit" class="btdownloadapp" value="Скачать приложение">
	</form>
	<form>
		<input type="submit" class="btpageapp" value="Перейти на страницу приложения">
	</form>
	<form>
		<input type="submit" class="btdelapp" value="Удалить приложение">
	</form>


	</div>


	</div>
	<div style="width: 49%; height: 997px; position: absolute; top: 3px; left: 50%;">
	<center><h2>Сообщения</h2></center>
	

	</div>

</div>


</body>
</html>