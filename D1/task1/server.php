<?php

// var_dump($_POST)."<br>"; // print it as an array

// echo $_POST['first-name']; // print the value


echo "<div>";
echo "<p> Thanks, ";
if ($_POST['gender'] == "male") {
    echo "Mr. ";
} else {
    echo "Miss. ";
}
echo $_POST['first-name']." ".$_POST['last-name']."</p>";
echo "<p>Please Review your information</p>";
echo "<p>Name: ".$_POST['first-name']." ".$_POST['last-name']."</p>";
echo "<p>Address: ".$_POST['address']."</p>";
echo "<p>Skills: <br>";
foreach($_POST['skills'] as $skill) {
    echo $skill."<br>";
}
echo "</p>";
echo "<p>Department: ".$_POST['department']."</p>";
echo"</div>";

?>