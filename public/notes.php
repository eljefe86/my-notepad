<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=notesdb;charset=utf8', 'user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'SELECT * FROM `note`';
    $result = $pdo->query($sql);

    while ($row = $result->fetch()) {
        $notes[] = $row;
    }

    $title = 'Note list';

    ob_start();

    include __DIR__ . '/../templates/notes.html.php';

    $output = ob_get_clean();

} catch (PDOException $e) {
    $title = 'An error has occurred';

    $output = 'Unable to connect to the database server: ' . $e->getMessage() .
        ' in ' . $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '/../templates/layout.html.php';
