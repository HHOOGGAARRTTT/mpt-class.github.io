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
            <a class="nav_link" href="filees.php">Файлы</a>
            <a class="nav_link" href="Upload.php">Скачать</a>
            <a class="nav_link" href="download.php">Загрузить</a>
          </nav>
        </div>
      </div>
    </header>
    <div class="intro">
      <div class="container">
        <div class="intro__inner">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="Filedownload">
      <?php
      $folder = 't1';
      if (is_dir($folder))
      {
        if ($dh = opendir($folder))
        {
          while (($file = reddir($dh)) !== false)
          {
            if ($file !='.' && $file != '..')
            {
            echo "<li>". $file. "<li>";
          }
          }
          closedir($dh);
        }
      }

       ?>
    <a class = "Filedownload_link" href="http://h99984ah.beget.tech/downloads">Скачать дилом</a>
    <a class = "Filedownload_link" href="http://h99984ah.beget.tech/downloads/otziv.zip">Скачать отзыв</a>
    </div>
  </body>
</html>
