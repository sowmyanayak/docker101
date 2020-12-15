<?php
$hostname = $_ENV["DB_HOST"];
$username = $_ENV["DB_USER"];
$password = $_ENV["DB_PASSWORD"];
$db = $_ENV["DB_SCHEMA"];

$dbconnect=new mysqli($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

$sql = 'SELECT * FROM users';

if ($result = $dbconnect->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->fname . " " . $user->lname . " - " . $user->email;
    echo "<br>";
}

?>
