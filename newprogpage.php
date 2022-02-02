<html>
<head lang="ru">
<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
<link rel="shurt icon" href="img/A.png"><meta charset="utf-8">
<style>
	.content{background: dimgrey; height: 1700px; width: 100%; position: absolute; left: 0px; top: 150px;}
	.menu{background: Gray; width: 100%; height: 50px; position: absolute; left: 0px; top: 100px;}


	
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
	.textarea{background: DarkGrey; width: 400px; height: 100px;}
	.minitextarea{background: DarkGrey; width: 400px; height: 50px;}
	.sub{background: Royalblue; width: 400px; height: 30px;}


</style>
</head>
<body>

<?php include 'users/shapka2.html'?>

<div class="content">
	<div style="width: 49%; height: 997px; position: absolute; top: 3px;">
	<center><h2>Заполните форму игры/программы/приложения</h2></center>
	<center><form method="post" action="newprog.php" enctype="multipart/form-data" name="form">
	<input type="text" placeholder="Название игры/программы/приложения" class="text" name="name" id="name" required><br />
	<textarea placeholder="Краткое описание игры/программы/приложения" name="minides" class="minitextarea" required>
</textarea>

<textarea placeholder="Описание игры/программы/приложения" name="des" class="textarea" required>
</textarea>
	
	<h3>Выберите тип (выбирите 1 вариант)</h3>	
	<p><label for="r1">Игра</label></p>
	<input type="checkbox" name="check1" id="r1">
	<p><label for="r2">Программа</label></p>
	<input type="checkbox" name="check2" id="r2">
	<p><label for="r3">Приложение</label></p>
	<input type="checkbox" name="check3" id="r3">
	<p><label for="r4">Другое</label></p>
	<input type="checkbox" name="check4" id="r4" ><br />

	<h3>Выберите платформу приложения (выбирите 1 вариант)</h3>	
	<p><label for="plat1">Windows</label></p>
	<input type="checkbox" name="plat1" id="plat1">
	<p><label for="plat2">macOS</label></p>
	<input type="checkbox" name="plat2" id="plat2">
	<p><label for="plat3">Android</label></p>
	<input type="checkbox" name="plat3" id="plat3">
	<p><label for="plat4">Linux</label></p>
	<input type="checkbox" name="plat4" id="plat4" ><br /><br />

	<h3>Напишите системные требования приложения</h3>	
<textarea placeholder="Пишите здесь" name="systreb" style="width: 400px; height: 100px; background: darkgrey;" required>
</textarea>

	
	<h3>Выберите иконку приложения (размер 200 на 200 px)(.ico, .png, .jpg, .bmp)</h3>
	<input type="file" name="icon" accept="image/x-icon, image/png, image/jpeg, image/bmp" required><br />
	
	<h3>Выберите скриншоты (размер 300 на 120 px)(.png, .jpg, .bmp)</h3>
	<input type="file" name="screensh1" accept="image/png, image/jpeg, image/bmp" required><br />
	<input type="file" name="screensh2" accept="image/png, image/jpeg, image/bmp" required><br />
	<input type="file" name="screensh3" accept="image/png, image/jpeg, image/bmp" required><br />
	<input type="file" name="screensh4" accept="image/png, image/jpeg, image/bmp" required><br />
	
	<h3>Выберите файл самой игры/программы/приложения (диструбутив или архив)(.exe, .msi, .apk, .dmg, .zip, .rar, .7z)</h3>
	<input type="file" name="file" required><br /><br />

	<h3>Введите данные аккаунта для проверки</h3>
	<input type="text" placeholder="Введите ваш логин" class="text" name="login" required min="0" max="10"><br />
	<input type="email" placeholder="Введите вашу электронную почту" class="text" name="email" required><br />
	<input type="password" placeholder="Введите ваш пароль" class="text" name="pass" required min="0" max="10"><br /><br />
	

	<input type="submit" value="Отправить игру/программу/приложение на проверку" name="sub" class="sub">
	</form></center>


	</div>

</div>


</body>
</html>