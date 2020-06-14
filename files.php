
//if ($_COOKIE['user'] == '')
{
  //(header("Location: http://h99984ah.beget.tech/register.html");)
}
//if(isset($_FILES['image']))
//{
  $errors = array();
  $file_name = $_FILES['doc']['name'];
  $file_size = $_FILES['doc']['size'];
  $file_tmp = $_FILES['doc']['tmp_name'];
  $file_type = $_FILES['doc']['type'];
  $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

  $expensions = array("docx", "doc", "docm");
  if ($file_size> 2097152)
  {
    $errors[] = 'Файл должен быть меньше'
  }
  if (empty($errors) == true)
  {
    move_uoloaded_file($file_tmp,"doc/".$file_name);
    echo "Success";
  }
  else {
    print $errors;
  }
}

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap"
    rel="stylesheet">
    <title>MPT</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="header__logo">MPT-class</div>
          <nav class="nav">
            <a class="nav_link" href="#">Файлы</a>
            <a class="nav_link" href="information.html">Информация</a>
            <a class="nav_link" href="register.html">Вход/регистрация</a>
          </nav>
        </div>
      </div>
    </header>
    <form action ="" method="post" enctype="multipart/form-data">
      <input type="file" name="doc">
      <input type="submit">

      <!--<ul>
        <li>Sent file: <?php //echo $_FILES['doc']['name']; ?></li>
        <li>Sent file: <?php //echo $_FILES['doc']['size']; ?></li>
        <li>Sent file: <?php //echo $_FILES['doc']['tipe']; ?></li>
      </ul> -->
    </form>
    <div class="intro">
      <div class="container">
        <div class="intro__inner">
      </div>
    </div>
  </div>
  </body>
</html>
