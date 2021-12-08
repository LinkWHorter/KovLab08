<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include_once("showAccs.php");    
    ?>

<form action="updateAccs.php" method="post">
        <label>ІД</label><input name="id_p" type="text"><br>
        <label>login</label><input name="login" type="text"><br>
        <label>password</label><input name="password" type="text"><br>
        <label>phots</label><input name="phots" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>
