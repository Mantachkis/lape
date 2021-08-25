<?php
$host = '127.0.0.1';
$db   = 'medziai';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options); // pdo objektas


//trynimas
// DELETE FROM table_name
// WHERE some_column = some_value


$sql = "DELETE FROM medziai
WHERE `name`='Slyva'
";
$pdo->query($sql);


//rasymas
//INSERT INTO table_name (column1, column2, column3,...)
//VALUES (value1, value2, value3,...)

$height = rand(1, 100) / 10;
$sql = "INSERT INTO medziai
(`name`,height,`type`)
VALUES ('Slyva',$height,1)

";

$pdo->query($sql);

//redagavimas
// UPDATE table_name
// SET column1=value, column2=value2,...
// WHERE some_column=some_value 

$sql = "UPDATE medziai
SET height = 5
WHERE  height <10
";
$pdo->query($sql);
// skaitymas
//SELECT column_name(s) FROM table_name

$sql = "SELECT id,`name`,height,`type` FROM medziai
WHERE `type`=1 
ORDER BY height
LIMIT 10
";


$stmt = $pdo->query($sql); // grazina visa steitmento objekta 
echo '<ul>';
while ($row = $stmt->fetch()) {
    echo '<li> id ' . $row['id'] . ' ' . $row['name'] . ' metrai ' . $row['height'] . 'tipas ' . ['lapuotis', 'spygliuotis', 'palme'][$row['type'] - 1] . '</li>';
}
echo '</ul>';