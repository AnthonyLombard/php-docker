<?php
//phpinfo();


$pdo = new PDO('mysql:dbname=waggr;host=mysql', 'root', 'password', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
