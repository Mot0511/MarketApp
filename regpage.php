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

	.text{background: DarkGrey; width: 400px; height: 40px;}
	.sub{background: DarkGrey; width: 400px; height: 30px;}

</style>
</head>
<body>

<?php include 'shapka1.html'?>

<div class="content">
	<div style="width: 49%; height: 997px; border: solid grey 3px; position: absolute; top: 3px;">
	<center><h2>Войдите в аккаунт</h2></center>
	<center><form method="post" action="login.php">
	<input type="text" placeholder="Введите ваш логин" class="text" name="login" required min="0" max="10"><br />
	<input type="email" placeholder="Введите вашу электронную почту" class="text" name="email1" required><br />
	<input type="password" placeholder="Введите ваш пароль" class="text" name="pass" required min="0" max="10"><br />
	<input type="submit" value="Войти" class="sub"><br />
	</form></center>
	</div>
	
	<div style="width: 49%; height: 997px; border: solid grey 3px; position: absolute; left: 50%; top: 3px;">
	<center><h2>Если нет аккаунта, то зарегистрирйтесь</h2></center>
	<center><form method="post" action="reg.php">
	<input type="text" placeholder="Придумайте логин" class="text" name="login" required min="0" max="10"><br />
	<input type="email" placeholder="Введите вашу электронную почту" class="text" name="email1" required><br />
	<input type="password" placeholder="Придумайте пароль" class="text" name="pass" required min="0" max="10"><br />
	<input type="submit" value="Зарегистрироваться" class="sub"><br /> 
	</form></center>

	</div>

</div>


</body>
</html>