<?php

$allData = file_get_contents("data.json");
$encodedData = json_decode($allData, true);

echo "<table border= 1>";
echo "<thead>";
echo "<tr>";
foreach (array_keys($encodedData[0]) as $key => $value) {
    # code...
    echo "<th>";
    echo $value;
    echo "</th>";
}
foreach ($encodedData as $key => $value) {
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