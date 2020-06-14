<?php
if (isset($_POST['submit']))
{
  $file = $_FILES['file'];

  $file_name = $_FILES['file']['name'];
  $file_tmp_name = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_error = $_FILES['file']['error'];
  $file_type = $_FILES['file']['type'];

  $file_ext = explore('.', $file_name);
  $fileActualExt = strtolower(end($file_ext));

  $allowed = array('docm', 'docx', 'doc', 'txt', 'jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActualExt, $allowed))
  {
    if ($file_error === 0)
    {
      if ($file_size < 50000)
      {
      $file_name_new = uniqid('', true).".".
      $fileActualExt;
      $fileDestination = 'downloads/'.$file_name_new;
      move_uoloaded_file($file_tmp, $fileDestination);
      header("Location: index.php?uploadsuccess")
    }
        else
        {
          echo "Файл слишком велик";
        }
    }
  }

  if (in_array($fileActualExt, $allowed))
  {
    echo "Вы не можете загрузить данный файл"
  }
}
 ?>
