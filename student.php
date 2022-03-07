
<?php

	$db=mysqli_connect("localhost","root","","library");  
					/* server name, username, passwor, database name */

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h3>List Of Student</h3>
    <?php
    $result = mysqli_query($db,"SELECT * FROM `student`;");
    ?>
    <table class="table table-bordered">
        <tr style='background-color: #1c33d76b;'>
            <th>First Name</th>
            <th>Last Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Contact</th>
        </tr>
        <?php

    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['first'] ?></td>
            <td><?php echo $row['last'] ?></td>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['contact'] ?></td>
        </tr>
        <?php
    }
    ?>
    </table>

</body>
</html>

