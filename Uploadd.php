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
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="sumbit">Загрузить</
    </div>
  </body>
</html>
