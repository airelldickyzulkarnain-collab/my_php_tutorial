<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#9 - Loops</title>
</head>
<body>

<h1>#9 - Loops</h1>

<?php
/*
    MY NOTES:
    - Loops repeat code without writing the same statement many times.
    - A for loop is useful when we know how many times to repeat.
    - A foreach loop is useful when going through an array.
    - A while loop repeats while its condition is true.
*/

echo "<h2>For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: " . $i . "<br>";
}

echo "<h2>Foreach Loop</h2>";

$skills = ["PHP", "HTML", "CSS", "Multimedia"];

foreach ($skills as $skill) {
    echo "I am learning " . $skill . "<br>";
}

echo "<h2>While Loop</h2>";

$count = 1;

while ($count <= 3) {
    echo "Practice round " . $count . "<br>";
    $count++;
}

?>

<br>
<a href="index.php">Back to Home</a>

</body>
</html>
