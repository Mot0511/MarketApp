
	<meta charset="utf-8">
	<?php
	error_reporting(0);
	$islogin = file_get_contents('islogin.txt');
	if(!$_SESSION['localhost/marketapp/users/Mot 0511/Mot 0511.php']){
	  if (!$islogin == '1'){
	    echo '<script type="text/javascript">location="../../regpage.php"</script>';
	    exit;
	  }
	}
	$islogin = fopen('islogin.txt', 'w');
	fwrite($islogin, '0');
	?>

	