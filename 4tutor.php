<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#4 - Variables and Constants</title>
</head>
<body>

<h1>#4 - Variables & Constants</h1>

<?php
/*
    MY NOTES:
     variable starts with the $ symbol.
     Variables are useful for storing values that can change.
     Variable names are case-sensitive.
     Constants store values that should not change.
      define() can be used to create a constant.
*/

$name = "Airell";
$course = "Creative Multimedia";
$semester = 4;

 echo "Name: " . $name;
echo "<br>";
   echo "Course: " . $course;
    echo "<br>";
     echo "Semester: " . $semester;

echo "<hr>";

 define("COLLEGE_COUNTRY", "Malaysia");

echo "Country: " . COLLEGE_COUNTRY;

// I can change a variable.
$semester = 5;

echo "<br>Next Semester: " . $semester;

?>

<br><br>
<a href="index.php">Back to Home</a>

</body>
</html>
