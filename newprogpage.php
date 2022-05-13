<html>
<head lang="ru">
<title>MarketApp - сайт для бесплатной публикации программ, игр и приложений</title>
<meta charset="utf-8">
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
<link id="style" rel="stylesheet" href="style.css">
<style media="screen" id="style2">
.content{background: dimgrey; height: 1200px; width: 100%; position: absolute; left: 0px; top: 150px;}
.file{opacity: 0;}
.footer{background: grey; width: 100%; height: 140px; position: absolute; top: 1330px; left: 1px;}

</style>
</head>
<body>


<?php include 'shapka2.html'?>

<div class="content">
	<div class="newapps">
	<center><h2>Заполните форму игры/программы/приложения</h2></center>
	<center>
	<form method="post" action="newprog.php" enctype="multipart/form-data" name="form">
	<input type="text" placeholder="Название игры/программы/приложения" class="text" name="name" id="name" required><br />
	<textarea placeholder="Краткое описание игры/программы/приложения" name="minides" class="minitextarea" required>
</textarea>

<textarea placeholder="Описание игры/программы/приложения" name="des" class="textarea" required>
</textarea>

	<h3>Выберите тип (выбирите 1 вариант)</h3>
	<p><label for="r1">Игра</label></p>
	<input type="checkbox" name="check1" id="r1" class="check">
	<p><label for="r2">Программа</label></p>
	<input type="checkbox" name="check2" id="r2" class="check">
	<p><label for="r3">Приложение</label></p>
	<input type="checkbox" name="check3" id="r3" class="check">
	<p><label for="r4">Другое</label></p>
	<input type="checkbox" name="check4" id="r4" class="check"><br />

	<h3>Выберите платформу приложения (выбирите 1 вариант)</h3>
	<p><label for="plat1">Windows</label></p>
	<input type="checkbox" name="plat1" id="plat1" class="check">
	<p><label for="plat2">macOS</label></p>
	<input type="checkbox" name="plat2" id="plat2" class="check">
	<p><label for="plat3">Android</label></p>
	<input type="checkbox" name="plat3" id="plat3" class="check">
	<p><label for="plat4">Linux</label></p>
	<input type="checkbox" name="plat4" id="plat4" class="check"><br /><br />

	<div id="inputprice">
	</div>

	<script type="text/javascript">
		function typebuy1() {
			document.getElementById('htypebuy1').innerHTML = 'Выбран этот вариант';
			document.getElementById('htypebuy2').innerHTML = '';
			document.getElementById('inputprice').innerHTML = '';
		}
		function typebuy2() {
			document.getElementById('htypebuy1').innerHTML = '';
			document.getElementById('htypebuy2').innerHTML = 'Выбран этот вариант';
			document.getElementById('inputprice').innerHTML = '<br /><input type="number" name="input_price" class="input_price" placeholder="Цена: ">'

		}
	</script>

</center>
</div>

<div class="rec">
	<center><h3>Напишите системные требования приложения</h3>
<textarea placeholder="Пишите здесь" name="systreb" class="textarea" required>
</textarea>


	<h3>Выберите иконку приложения (размер 200 на 200 px)(.ico, .png, .jpg, .bmp)</h3>
	<label for="f1" class="labelfile">Нажмите, чтобы выбрать файл</label><br />
	<input type="file" name="icon" accept="image/x-icon, image/png, image/jpeg, image/bmp" id="f1" class="file" required><br />

	<h3>Выберите скриншоты (размер 300 на 120 px)(.png, .jpg, .bmp)</h3>
	<label for="f2" class="labelfile">Нажмите, чтобы выбрать первый скриншот</label><br />
	<input type="file" name="screensh1" accept="image/png, image/jpeg, image/bmp"  id="f2" class="file" required><br />
	<label for="f3" class="labelfile">Нажмите, чтобы выбрать второй скриншот</label><br />
	<input type="file" name="screensh2" accept="image/png, image/jpeg, image/bmp"  id="f3" class="file" required><br />
	<label for="f4" class="labelfile">Нажмите, чтобы выбрать третий скриншот</label><br />
	<input type="file" name="screensh3" accept="image/png, image/jpeg, image/bmp"  id="f4" class="file" required><br />
	<label for="f5" class="labelfile">Нажмите, чтобы выбрать четвёртый скриншот</label><br />
	<input type="file" name="screensh4" accept="image/png, image/jpeg, image/bmp"  id="f5" class="file" required><br />

	<h3>Выберите файл самой игры/программы/приложения (диструбутив или архив)(.exe, .msi, .apk, .dmg, .zip, .rar, .7z)</h3>
	<label for="f6" class="labelfile">Нажмите, чтобы выбрать файл самой игры/программы/приложения</label><br />
	<input type="file" name="file" class="file" id="f6" required><br /><br />

	<h3>Введите данные аккаунта для проверки</h3>
	<input type="text" placeholder="Введите ваш логин" class="text" name="login" required min="0" max="10"><br />
	<input type="email" placeholder="Введите вашу электронную почту" class="text" name="email" required><br />
	<input type="password" placeholder="Введите ваш пароль" class="text" name="pass" required min="0" max="10"><br /><br />


	<input type="submit" value="Отправить игру/программу/приложение на проверку" name="sub" class="sub">
	</form></center>


	</div>

</div>

<script type="text/javascript">
var width = document.documentElement.clientWidth;
if (width < 1000){
	var tagstyle = document.getElementById('style');
	document.getElementById('style2').innerHTML = '.content{background: dimgrey; height: 4500px; width: 100%; position: absolute; left: 0px; top: 960px;}'
	tagstyle.setAttribute('href', 'mstyle.css');
	//document.getElementById('heading').innerHTML = width;
}
</script>

<?php include 'footer.html'; ?>

</body>
</html>
