<?php

// var_dump($_POST)."<br>";


function register() {
    echo "<div>";
    echo "<p>First Name: ".$_POST['first-name']."</p>";
    echo "<p>Last Name: ".$_POST['last-name']."</p>";
    echo "<p>Email: ".$_POST['register-email']."</p>";
    echo "<p>Password: ".$_POST['register-pass']."</p>";
    echo"</div>";
}

function login() {
    echo "<div>";
    echo "<p>Email: ".$_POST['login-email']."</p>";
    echo "<p>Password: ".$_POST['login-pass']."</p>";
    echo"</div>";
}

if (isset($_POST['register'])) {
    register();
}
if (isset($_POST['login'])) {
    login();
}


?>