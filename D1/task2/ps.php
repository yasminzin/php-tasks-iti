<?php

// 1 ----------------------------------
function printName($name) {
    echo "Hello ".$name."<br>";
}

printName("Programmer");

// 2 ----------------------------------
function calculate($num1, $num2) {
    echo $num1+$num2."<br>";
    echo $num1*$num2."<br>";
    echo $num1-$num2."<br>";
}

calculate(10,2);

// 3 ----------------------------------
function calculateEquation($a, $b, $c, $d) {
    echo $a*$b-$c*$d."<br>";
}

calculateEquation(1, 2, 3, 4);

// 4 ----------------------------------
function summationOfLastTwoDigits($n, $m) {
    $n = $n%10;
    // $m = $m%10;
    $m = $m/10;
    $m = ($m - floor($m)) * 10;
    
    echo $n+$m."<br>";
}

summationOfLastTwoDigits(13, 12);

// 5 ----------------------------------
function oddOrEven($num) {
$num = floor($num/1000);
    if ($num%2 == 0) {
        echo "EVEN <br>";
  } else {
        echo "ODD <br>";
  }
}

oddOrEven(4569);
oddOrEven(3569);

// 6 ----------------------------------
function whoWin($a, $b, $k) {
    if ($a%$k == 0 && $b%$k == 0) {
        echo "Both <br>";
  } else if($a%$k == 0 && $b%$k != 0) {
        echo "Memo <br>";
  } else if($a%$k != 0 && $b%$k == 0) {
        echo "Momo <br>";
  }
}

whoWin(15, 7, 3);

// 7 ----------------------------------
function luckyNumber($num) {
if ($num >= 10 && $num <= 99) {
    $digitOne = floor($num/10);
    $digitTwo = $num%10;
    if ($digitOne%$digitTwo == 0 || $digitTwo%$digitOne == 0) {
        echo "Yes <br>";
    }else {
        echo "No <br>";
    }
}
}

luckyNumber(39);
luckyNumber(82);
luckyNumber(55);
luckyNumber(49);
luckyNumber(79);
luckyNumber(43);

?>