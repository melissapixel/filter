<?php
    session_start();
?>
<?php
    require 'conn.php';
    require 'bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<body>
    <h3>We need some information about you.</h3>

    <form action="date.php" method="POST">
  <label for="fname">First name:</label>
        <input type="text" name="fname" placeholder="Enter first name" require><br><br>

  <label for="lname">Last name:</label>
        <input type="text" name="lname" placeholder="Enter last name"  require><br><br>

  <label for="age">Age:</label>
        <input type="number" name="age" placeholder="Enter age" require><br><br>

  <input type="submit" value="Submit">
    </form>

</body>
</html>