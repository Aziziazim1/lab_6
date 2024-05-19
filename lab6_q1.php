<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
  <style>
    table {
      border-collapse: collapse;
      border: 1px solid black;
    }
    td {
      border: 1px solid black; 
      padding: 5px;
    }
  </style>
</head>
<body>
  <?php
    $name = "Muhammad Azizi Azim Bin Zamri";
    $matric_number = "AI220182";
    $course = "Bachelor Of Information Technology";
    $year_of_study = "Year 2";
    $address = "No.2, Jalan Lampam 23, Taman Tanjung Puteri Resort, 81700 Pasir Gudang, Johor";
  ?>
  <table> 
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>
