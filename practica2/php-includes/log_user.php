<?php
$dsn = "mysql:host=localhost;dbname=centro_deportivo";
$db_username = "root";
$db_password = "etoipip1";

try{
    $connection = new PDO($dsn, $db_username, $db_password);
}catch(PDOException $except) {
    echo "Ha petado el mecanismo";
    echo $except->getMessage();
    echo phpinfo();
}


$user_query = "SELECT * FROM users WHERE user_name=:user_name AND user_pass=:user_pass";
$user_sentence = $connection->prepare($user_query);

$username = $_POST['username'];
$pass = $_POST['password'];

$user_sentence->bindValue(":user_name", $username);
$user_sentence->bindValue(":user_pass", $pass);

$user_sentence->execute();

if ($user_sentence->rowCount() > 0){
    session_start();
    $_SESSION["usr"] = $username;
    echo("Logged");
} else {
    echo("NotLogged");
}

?>
