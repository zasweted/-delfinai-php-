<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $host = '127.0.0.1';
    $db   = 'del_finu';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);

    // UPDATE table_name
    // SET column1 = value1, column2 = value2, ...
    // WHERE condition;

    $sql = "
        UPDATE trees
        SET type = :t, height = :h, title = :title
        WHERE id = :id
    ";

    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        't' => $_POST['type'],
        'h' => $_POST['height'],
        'title' => $_POST['title'],
        'id' => $_POST['id']
    ]);
    header('Location: http://localhost/-delfinai-php-/mysql/dbphp/');
    die();
}

?>
<form action="" method=POST>
ID: <input type="text" name="id"></br></br>
Title : <input type="text" name="title"></br>
Height : <input type="text" name="height"></br>
Type : <select name="type"></br>
    <option value="1">Lapuotis</option>
    <option value="2">Spigliotis</option>
    <option value="3">Palme</option>
</select>
<button type="submit">Plant it!</button>
</form>