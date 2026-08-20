<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>#5 - Strings</title>
</head>
<body>

<h1>#5 - Strings</h1>

<?php
/*
    MY NOTES:
    string is text inside quotation marks.
    Strings can use single quotes or double quotes.
    The dot (.) joins strings together. This is called concatenation.
    strlen() counts characters in a string.
    strtoupper() changes text to uppercase.
    strtolower() changes text to lowercase.
*/

$firstName = "Airell";
$lastName = "Student";

$fullName = $firstName . " " . $lastName;

  echo "Full Name: " . $fullName;
echo "<br>";

   echo "Welcome, $firstName!";
echo "<br><br>";

$message = "I am learning PHP";

   echo "Original: " . $message;
  echo "<br>";
  echo "Length: " . strlen($message);
   echo "<br>";
   echo "Uppercase: " . strtoupper($message);
 echo "<br>";
echo "Lowercase: " . strtolower($message);

?>

<br><br>
<a href="index.php">Back to Home</a>

</body>
</html>
