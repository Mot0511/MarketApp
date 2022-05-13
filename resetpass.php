<!DOCTYPE html>
<html lang="ru" dir="ltr">
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    h1{color: black;}
    .login{background: darkgrey; width: 450px; height: 30px;}
    .email{background: darkgrey; width: 450px; height: 30px;}
    .resetbt{background: darkgrey; width: 457px; height: 30px;}
    .btreturn{background: darkgrey; width: 150px; height: 30px;}
    </style>
  </head>
  <body>
    <h1>Востановление пароля</h1>
    <form action="regpage.php">
      <button type="submit" name="return" class="btreturn" onclick="return">Вернуться назад</button><br /><br />
    </form>
    <form class="form" action="" method="post">
      <input type="text" name="login" placeholder="Введите ваш логин" class="login" required><br />
      <input type="text" name="email" placeholder="Введите электронную почту, на которую был зарегистрирован аккаунт" class="email" required><br />
      <input type="submit" name="sub" value="Востановить пароль" class="resetbt">
    </form>
    <?php
    if (isset($_POST['sub'])) {
      $login = $_POST['login'];
      $useremail = $_POST['email'];
      $elpass = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
      $langthpass = 10;


      $newpass = "";
      $arelpass = array();

      for ($i=0; $i < $langthpass; $i++) {
        $numelar = rand(0, 62);
        array_push($arelpass, $elpass[$numelar]);
      }

      for ($i=0; $i < $langthpass; $i++) {
        $newpass = $newpass.$arelpass[$i];
      }

      $newhashpass = password_hash($newpass, PASSWORD_DEFAULT);
      $email = 'redstoun.mod@yandex.ru';
      $heading = 'Изменение пароля';
      $text = 'Логин пользователя: '.$login.' Почта пользователя: '.$useremail.' Новый пароль пользователя: '.$newpass.' Новый хэшрованнй пароль пользователя: '.$newhashpass;
      mail($email, $heading, $text);

      $heading = 'Изменение пароля';
      $text = 'Новый пароль пользователя: '.$newpass;
      mail($useremail, $heading, $text);

      echo 'Ваш новый пароль отправлен вам на почту. В течении этого дня пароль будет доступен';
    }
    ?>

  </body>
</html>
