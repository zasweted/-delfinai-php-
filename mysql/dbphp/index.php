<?php

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

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // DELETE FROM table_name WHERE condition;

    $sql = "
        DELETE FROM trees
        WHERE id = ?
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['id']]);

    header('Location: http://localhost/-delfinai-php-/mysql/dbphp/');
    die();
}

// SELECT column1, column2, ...
// FROM table_name;

$sql = "
    SELECT id, type, height, title
    FROM trees
    
    
";

$stmt = $pdo->query($sql);

$data = $stmt->fetchAll();

?>

<ul>

    <?php foreach($data as $t) : ?>

        <li>ID: <?=$t['id']?>
        TYPE: <?=['Lapuotis', 'Spigliotis', 'Palme'][$t['type']-1]?>
        HEIGHT: <?=$t['height'] . 'M'?>
        TITLE: <?=$t['title']?></li>

    <?php endforeach ?>

</ul>


<form action="" method="POST">

        ID: <input type="text" name="id"></br></br>
        <button type="submit">Cut</button>

</form>


<a href="http://localhost/-delfinai-php-/mysql/dbphp/create.php">Create</a>
<a href="http://localhost/-delfinai-php-/mysql/dbphp/edit.php">Edit</a>