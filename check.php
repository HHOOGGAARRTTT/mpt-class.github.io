<?php
$servername = 'h99984ah.beget.tech';
$database = 'h99984ah_tech';
$username = 'h99984ah_tech';
$password = '20Vfvekmrf00';
?>
<?php
require_once 'conection.php';

$link = mysqli_connect($servername, $username, $password, $database)
or die("Ошибка " .mysqli_error($link));

$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link))
if($result)
{
  echo "Выполнение запроса прошло успешно";
}
mysqli_close($link);
?>
