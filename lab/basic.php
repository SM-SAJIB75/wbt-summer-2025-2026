
<!-- <!DOCTYPE html>
<html>
<body>
    <h1>my first php page</h1>
    <?php
    echo "Hello, student welcome to php.";
    ?>
</body>
</html> -->

 <?php
 $length = 10;
  $width = 5;
  $area = $length * $width;
   $perimeter = 2 * ($length + $width);

  echo "1,rectangle= $area <br>";
  echo "length= $length, width= $width <br>";
 echo "area= $area <br>";
 echo "perimeter= $perimeter <br> <br>";
 ?>

 <?php
 $amount = 1000;
 $vat_rate = 15;
$vat = ($amount * $vat_rate) / 100;
$total_amount = $amount + $vat;

  echo "VAT Calculation<br>";
 echo "amount = $amount <br>";
echo "vat rate = $vat_rate%<br>";
echo "vat = $vat <br>";
echo "total amount (with vat) = $total_amount <br><br>";
?> 

 <?php
 $number1 = 100;
 $number2 = 50;
 $number3 = 200;

if ($number1 > $number2 && $number1 > $number3) {
    echo  "number1 is the largest number.";
} elseif ($number2 > $number1 && $number2 > $number3) {
    echo "number2 is the largest number.";
} else {
    echo "number3 is the largest number.";
}
?> 
 <br><br> 
<?php
$number1 = 10;
if ($number1 % 2 == 0) {
    echo " $number1 even number.";
} else {
    echo " $number1 odd number.";
}
?>  
<br><br>
 <?php
echo "Odd numbers between 10 to 100:<br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
?>

<?php
echo "<br><br>Search element in array:<br>";
$arr = [12, 45, 23, 67, 34, 89, 10];
$search = 67;
$found = false;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        $found = true;
        echo "$search found at index $i <br>";
        break;
    }
}

if (!$found) {
    echo "$search not found in the array <br>";
}
?> 

 <?php
// Numbers
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br>";

// P Stars
echo "Shape (Stars):<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

// Characters 
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}
?>

