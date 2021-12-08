<?php

include_once('db.php');

$login = $_POST['login']; $password = $_POST['password']; $phots = $_POST['phots'];

$sql = "INSERT INTO user_acc (login, password, phots) VALUES ('$login', '$password' , '$phots')";

if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }

include_once("showAccs.php");

?>
