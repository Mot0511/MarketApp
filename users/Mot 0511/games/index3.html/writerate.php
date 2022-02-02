
	<meta charset='utf-8'>
	<?php
	$rate = $_POST['rate'];
	$ratefile = fopen("../../../../rates/games/index3.html.txt", 'a');
	fwrite($ratefile, $rate.' ');
	fclose($ratefile);
	echo 'Рейтинг поставлен <a href=\'page.php\'>Вернуться на страницу приложения</a>';
	?>
