
	<?php
	$rate = $_POST['rate'];
	$ratefile = fopen("../../../../rates/name.txt", 'a');
	fwrite($ratefile, $rate);
	//file_put_contents('rates/'.games.'/'.index.'.txt', $rate.' ');
	echo 'Рейтинг поставлен';
	?>
	