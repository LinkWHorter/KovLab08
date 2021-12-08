<?php

include_once('db.php');



$id_p = $_POST['id_p'];
$login = $_POST['login'];
$password = $_POST['password'];
$balans = $_POST['phots'];

$sql = "UPDATE user_acc SET id_p='$id_p', login='$login' , password='$password' , phots='$phots' WHERE id_p='$id_p' ";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showAccs.php");
?>
