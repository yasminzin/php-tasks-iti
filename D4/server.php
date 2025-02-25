<?php


if (isset($_POST['register'])) {
    register();
}
if (isset($_POST['login'])) {
    login();
}

function register() {
// for test ----
// var_dump($_POST)."<br>";

// save registered data in variables ----
$name = $_POST['name'];
$email = $_POST['register-email'];
$password = $_POST['register-pass'];
$image = $_FILES['image'];

// for test ----
// echo "$name<br>";
// echo "$email<br>";
// echo "$password<br>";
// print_r($image)."<br>";

// new name for image to store = timastamp.extension ----
$newImage = time().'.'.pathinfo($image['name'], PATHINFO_EXTENSION);

$validImageName = ["png", "jpg", "jpeg"];

// 1. getting image extension through PATHINFO_EXTENSION ----
// $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);

// 2. getting image extension through using explode to convert array to string ----
$imageExtension = strtolower(explode(".", $image['name'])[1]); // (delimiter, array)

// for test ----
// echo "$imageExtension<br>";

// check image extension ----
if (!in_array($imageExtension, $validImageName)) {
    header("location:register.php?message=image must be in png, jpg, jpeg format");
    exit;
}

// check image size ----
// 10.000.000 bytes = 10 megabytes ----
if ($image['size'] > 10000000) {
    header("location:register.php?message=image size must not exceed 10mb");
    exit;
}

// creating images directory if it's not exist ----
if (!is_dir("images")) {
    mkdir("images");
}

// moving image from temporary location to specific directory (stored permenantly) ----
// move_uploaded_file(temporary, permenant) ----
move_uploaded_file($image['tmp_name'], "images/".$newImage);

// if data.json is not exit it will create the file and write [] in it ----
// else if it's exist write registered information in it (in json format) ----
if (!file_exists("data.json")) {
    file_put_contents("data.json", "[]");
} else {
    $user = [
        "name" => $name,
        "email" => $email,
        "pass" => $password,
        "newImage"=> $newImage
    ];

    $dataInFile = file_get_contents("data.json"); // get data in data.json
    $decodedData = json_decode($dataInFile, true); // converting json in file to associative array

    // check for email
    foreach($decodedData as $key => $value) {
        if ($user['email']== $value['email']) {
            header("location:register.php?message=email is already registered");
            exit;
        }
    }

    $decodedData[] = $user; // append registered info to the associative array decodedData
    $newData = json_encode($decodedData); // converting associative array to json
    file_put_contents("data.json", $newData); // write newData to json file
    header("location:login.php");
}
}

function login() {
    $email = $_POST['login-email'];
    $password = $_POST['login-pass'];

    $dataInFile = file_get_contents("data.json");
    $decodedData = json_decode($dataInFile, true);

    foreach($decodedData as $key => $value) {
        if ($email == $value['email'] && $password == $value['pass']) {
            // echo "success";
            header("location:table.php");
            exit;
        } else {
            // echo "fail";
            header("location:login.php?message=wrong email or password");
        }
    }
}


?>