<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q3</title>
</head>
<body>
  <?php
  function calculateArea($width, $width1) {
    $area = $width * $width1;
    return $area;
  }

  $width = 4;
  $width1 = 2; 


  $calculatedArea = calculateArea($width, $width1);  

  echo "The area of the rectangle with a width of $width and $width1 is $calculatedArea";
  ?>
</body>
</html>
