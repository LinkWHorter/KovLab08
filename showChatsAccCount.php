<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Кількість користувачів в чатах</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Кількість користувачів в чатах</h1>

    <?php

    include_once('db.php');

    $sql = 'SELECT c.group_name, COUNT(a.grupa_id) as "kilk_acc" FROM chats AS c LEFT JOIN accs AS a ON c.id = a.grupa_id GROUP BY a.grupa_id';

    if($result = $mysqli->query($sql)) {
        printf("<h3>Звіт - Кількість користувачів в чатах: </h3><br>");   
        printf("<table><tr><th>Номер чату</th><th>Кількість аккаунтів</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['group_name'], $row['kilk_acc']);
        };
        printf("</table>");
        $result->close();
    };

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
