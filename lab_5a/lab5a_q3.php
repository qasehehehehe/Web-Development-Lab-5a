<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Calculate the area of a rectangle
    function calculateArea($width, $height) {
        return $width * $height;
    }

    // Call function
    $width = 13;
    $height = 11;
    $area = calculateArea($width, $height);

    // Result
    echo "The area of a rectangle with a width of $width and height of $height is $area.";
    ?>
</body>
</html>
