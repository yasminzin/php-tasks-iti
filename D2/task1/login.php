<?php

include "bootstrap.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container-fluid {
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="container-fluid bg-success p-5">
    <div class="container bg-white shadow p-2 w-50">
        <h1 class="text-center">Login Form</h1>
        <hr>
        <form action="server.php" method="post">
            <div class="row p-3 justify-content-center">
                <div class="col-12">
                    <label for="email">Email</label>
                </div>
                <div class="col-12 mb-3">
                    <input type="email" name="login-email" id="email" placeholder="Email" class="w-100">
                </div>
                
                <div class="col-12">
                    <label for="pass">Password</label>
                </div>
                <div class="col-12 mb-3">
                    <input type="password" name="login-pass" id="pass" placeholder="Password" class="w-100">
                </div>
                
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success" name="login">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>