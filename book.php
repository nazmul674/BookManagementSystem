<?php

	$db=mysqli_connect("localhost","root","","library");  
					/* server name, username, passwor, database name */

?>
<?php
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h3>List Of Books</h3>
    <?php
    $result = mysqli_query($db, "SELECT * FROM book");
    ?>
    <table class="table table-bordered">
        <tr style='background-color: #1c33d76b;'>
            <th>ID</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Edition</th>
            <th>Status</th>
            <th>Quantity</th>
            <th>Department</th>
            <th>Book Type</th>
            <th>Publication</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php

    while ($row = mysqli_fetch_assoc($result)) {
        extract( $row );

        echo "<tr>";
		echo "<td> $bid </td>";
		echo "<td> $name </td>";
        echo "<td> $authors </td>";
		echo "<td> $edition </td>";
        echo "<td> $status </td>";
		echo "<td> $quantity </td>";
        echo "<td> $department </td>";
		echo "<td> $topic </td>";
        echo "<td> $publication </td>";
        
        echo "<td> <a href = 'delete_book.php?bid=$bid'> Delete </a> </td>";
		echo "<td> <a href = 'update_book.php?bid=$bid&name=$name&authors=$authors&edition=$edition&status=$status&quantity=$quantity&department=$department&topic=$topic&publication=$publication'> Update </a> </td>";
        echo "<tr>";
    }
    ?>
    </table>


    
</body>
</html>



