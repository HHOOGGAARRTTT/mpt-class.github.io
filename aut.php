<?php
$servername = 'h99984ah.beget.tech';
$database = 'h99984ah_tech';
$username = 'h99984ah_tech';
$password = '20Vfvekmrf00';

function defender_xss($arr)
{
    $filter = array("<", ">", "="," (",")",";","/");
     foreach($arr as $num=>$xss)
     {
        $arr[$num]=str_replace ($filter, "|", $xss);
     }
       return $arr;
}
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

$_REQUEST=defender_xss($_REQUEST);

class Database
{
  privat $link;

  public function __construct()
  {
    $this->connect();
  }

  public function connect()
  {
    $config = require_once 'config.php';
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

    $this->link = new PDO($dsn, $config['username'], $config['password']);
    return $this;
  }
  public function execute($sql)
  {
    $sth = $this->link->prepare($sql);
    return $sth->execute();
  }
  public function query($sql)
  {
    $exe = $this->execute($sql);
    $result = $exe->fetcAll(PDO::FETCH_ASSOC);
    if ($result === false)
    {
      return [];
    }
    return $result;
  }
}

$db = new Database();

$db->execute("INSERT INTO `users` SET `name`")

$pass = md5($pass."tyuibnm343");

$mysql = new mysqli($servername, $username, $password, $database);


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'
AND `pass` = '$pass'");
$user = $result->fetch_assos();
if(count($user) == 0)
{
  echo "Такой пользователь не найден";
  exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();
header('Location: /');
?>
