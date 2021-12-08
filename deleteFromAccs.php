<?php

include_once('db.php');

$id_p = $_POST['id_p'];

$sql = "DELETE FROM user_acc WHERE id_p='$id_p'";

if ($mysqli->query($sql))
    {
        echo "Рядок видалено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }

include_once("showAccs.php");
?>
