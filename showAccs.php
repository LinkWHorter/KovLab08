<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Аккаунт користувача</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><p style="color:#00ff00">Таблиця Аккаунт користувача</p></h1>

    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM user_acc ORDER BY id_p';

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список фотографій <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ІД</th><th>login</th><th>password</th><th>phots</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id_p'], $row['login'], $row['password'], $row['phots']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="insertIntoAccsForm.php"><p style="color:#CB4335">Вставити рядок</p></a><br></li>
        <li><a href="updateAccsForm.php"><p style="color:#CB4335">Змінити рядок</p></a><br></li>
        <li><a href="deleteFromAccsForm.php"><p style="color:#CB4335">Видалити рядок</p></a><br></li>
        <li><a href="index.html"><p style="color:#CB4335">На головну</p></a><br></li>
    </ul>

</body>
</html>
