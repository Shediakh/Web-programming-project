<?php

$username = $_POST["username"];
$password = $_POST["password"];

$file = fopen("../csv/users.csv", "r");

$loggedIn = false;

while (($row = fgetcsv($file)) !== false) {
    if (($username == $row[0]) && ($password == $row[1])) {
        $loggedIn = true;
        break;
    }
}

fclose($file);


if ($loggedIn) {
    session_start();
    $_SESSION["username"] = $username;
    header("location:homepage.php");
} else {
    echo '<script>alert("Incorrect username or password");';
    echo 'window.location.href="../index.php";</script>';
}
?>
