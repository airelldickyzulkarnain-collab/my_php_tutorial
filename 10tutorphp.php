<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#10 - Booleans and Comparisons</title>
</head>
<body>

<h1>#10 - Booleans & Comparisons</h1>

<?php
/*
    MY NOTES:
 A boolean has only two values: true or false.
    Comparison operators compare two values.
    == checks if values are equal.
    === checks if the value AND data type are equal.
!= means not equal.
    > means greater than.
     < means less than.
     >= means greater than or equal to.
     <= means less than or equal to.
*/

$age = 18;
$minimumAge = 18;

$isOldEnough = ($age >= $minimumAge);

  echo "Age: " . $age;
echo "<br>";

echo "Age is at least 18: ";
   var_dump($isOldEnough);

echo "<hr>";

$num1 = 10;
$num2 = "10";

   echo "10 == \"10\": ";
   var_dump($num1 == $num2);

  echo "<br><br>";

  echo "10 === \"10\": ";
  var_dump($num1 === $num2);

   echo "<br><br>";

$score = 80;

echo "Score greater than 50: ";
var_dump($score > 50);

?>

<br><br>
<a href="index.php">Back to Home</a>

</body>
</html>
