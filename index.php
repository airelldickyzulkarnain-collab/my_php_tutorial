<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Tutorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
            line-height: 1.6;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
        }
        a {
            display: block;
            padding: 10px 12px;
            margin: 7px 0;
            background: #eeeeee;
            border-radius: 7px;
            color: #222;
            text-decoration: none;
        }
        a:hover {
            background: #dddddd;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>My PHP Tutorial</h1>

    <?php
    /*
        PHP Tutorial Assignment

        My notes:
        - PHP is a server-side scripting language.
        - PHP code runs on the server before the result is sent to the browser.
        - PHP can be mixed with HTML.
        - PHP files normally use the .php extension.
        - For this assignment I practised the basic PHP topics from the playlist.
    */

    echo "<p>Hello! This is my PHP tutorial practice project.</p>";
    ?>

    <h2>Tutorial Exercises</h2>
    <a href="03_first_php.php">#3 - First PHP File</a>
    <a href="04_variables_constants.php">#4 - Variables & Constants</a>
    <a href="05_strings.php">#5 - Strings</a>
    <a href="06_numbers.php">#6 - Numbers</a>
    <a href="07_arrays.php">#7 - Arrays</a>
    <a href="08_multidimensional_arrays.php">#8 - Multidimensional Arrays</a>
    <a href="09_loops.php">#9 - Loops</a>
    <a href="10_booleans_comparisons.php">#10 - Booleans & Comparisons</a>
</div>
</body>
</html>
