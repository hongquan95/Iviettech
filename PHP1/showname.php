<?php
//get the data from the request
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>User details</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <main>
    <h1>User Details</h1>

    <label>First Name:</label>
    <span><?php echo $first_name; ?></span><br>

    <label>Last_name:</label>
    <span><?php echo $last_name; ?></span><br>
  </main>

</body>
</html>
