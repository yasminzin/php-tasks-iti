<?php

$arr = [
    ["name"=> "mona", "age" => 24, "city" => "tanta"],
    ["name" =>"mohamed" ,"age"=> 23,"city"=> "shebin"],
    [ "name" => "ahmed", "age" => 25, "city" => "mansoura"],
    [ "name" => "rana", "age" => 22, "city" => "alex"],
    ["name" => "salim", "age"=> 26 ,"city"=> "cairo",]
];



echo "<table border= 1>";
echo "<thead>";
echo "<tr>";
foreach (array_keys($arr[0]) as $key => $value) {
    # code...
    echo "<th>";
    echo $value;
    echo "</th>";
}
foreach ($arr as $key => $value) {
    echo "<tr>";
    foreach ($value as $key => $value) {
        echo "<td>";
        if (isset($value)){
            echo $value;
        } else {
            echo "Do Data Provided";
        }
        echo "</td>";
        
    }
    echo "</td>";
}
echo "</thead>";
echo "</table>";

?>