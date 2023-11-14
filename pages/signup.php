<?php

    function VarExist($var){
        if (isset($var)){
            return $var;
        }else{
            header("location:signup.html");
        }
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstName = $_POST["first-name"];
    $middleName = $_POST["middle-name"];
    $lastName = $_POST["last-name"];
    $sex = $_POST["sex"];
    $dateOfBirth = $_POST["date-of-birth"];
    $usersFile = fopen("../csv/users.csv", "a");
    fwrite($usersFile, $username . ',' . $password . ',' . $firstName . ',' . $middleName . ',' . $lastName . ',' . $sex . ',' . $dateOfBirth . "\n");
    fclose($usersFile);
    header("location:../index.php");
?>