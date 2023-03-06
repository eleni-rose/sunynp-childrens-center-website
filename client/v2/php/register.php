<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'config.php';

    if (emptyInputSignup($name, $email, $password) !== false) {
        header("location: ./index.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ./index.php?error=invalidemail");
        exit();
    }
    
} 

else {
    header("location: ./index.php");
}

?>
