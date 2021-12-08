<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Accs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Accs</h1>

    <?php

    include_once('db.php');

    $sql = 'SELECT a.name, c.group_name, p.photo_name FROM accs AS a LEFT JOIN chats AS c ON a.grupa_id = c.id INNER JOIN phots AS p ON c.photo_id = p.id ORDER BY a.name';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Список аккаунтів, чатів і фотографій: </h3><br>");   
        printf("<table><tr><th>Назва</th><th>Номер чата</th><th>Фото</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['name'], $row['group_name'], $row['photo_name']);
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showAccs.php">Таблиця Accs</a><br></li>
        <li><a href="showChats.php">Таблиця Chats</a><br></li>
        <li><a href="showPhots.php">Таблиця Phots</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>
</html>
