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



// SELECT columnname(s)
// FROM table1
// INNER JOIN table2
// ON table1.column_name = table2.column_name;

$sql = "SELECT `NAME`,`SURNAME`,`title`,autoriai.id AS aid, books.id AS bid
FROM autoriai
LEFT JOIN books
ON autoriai.id=books.author_id
ORDER BY aid
";



$stmt = $pdo->query($sql); // grazina visa steitmento objekta 
echo '<ul>';
while ($row = $stmt->fetch()) {
    echo '<li> id ' . $row['aid'] . ' ' . $row['NAME'] . ' ' . $row['SURNAME'] . ' ' . $row['title']  . '</li>';
}
echo '</ul>';


// SELECT customerName, customercity, customermail, salestotal
// FROM onlinecustomers AS oc
//    INNER JOIN
//    orders AS o
//    ON oc.customerid = o.customerid
//    INNER JOIN
//    sales AS s
//    ON o.orderId = s.orderId

$sql = "SELECT `NAME`,`SURNAME`,`title`,autoriai.id AS aid, books.id AS bid
FROM autoriai AS a
INNER JOIN Autoriaus_books AS ab
ON a.id=ab.author_id
INNER JOIN books AS b
ON b.id=ab.book_id

";


$stmt = $pdo->query($sql); // grazina visa steitmento objekta 
echo '<ul>';
while ($row = $stmt->fetch()) {
    echo '<li> id ' . $row['aid'] . ' ' . $row['NAME'] . ' ' . $row['SURNAME'] . ' ' . $row['title']  . '</li>';
}
echo '</ul>';