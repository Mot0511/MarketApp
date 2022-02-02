<html>
<head lang="ru">
<title>Аккаунт <?php echo $login ?></title>
<link rel="shurt icon" href="img/A.png"><meta charset="utf-8">

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

<div class="menu">
<a href="index.php"><h2><span style="position: absolute; left: 400px; top: 5px;">Игры</span></h2></a>
<a href="prog.php"><h2><span style="position: absolute; left: 500px; top: 5px;">Программы</span></h2></a>
<a href="app.php"><h2><span style="position: absolute; left: 670px; top: 5px;">Приложения</span></h2></a>
<a href="other.php"><h2><span style="position: absolute; left: 850px; top: 5px;">Другое</span></h2></a>

</div>
<div class="content">
	<div style="width: 49%; height: 997px; position: absolute; top: 3px;">
	<center><h2>Аккаунт <?php echo $login ?></h2>
	

	</div>
	<div style="width: 49%; height: 997px; position: absolute; top: 3px; left: 50%;">
	<center><h2>Сообщения</h2>
	

	</div>

</div>


</body>
</html>