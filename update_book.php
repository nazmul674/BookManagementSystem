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
	<title>Update Book</title>
	<style type="text/css">
		
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

 .form-control
{
  background-color: #004bd530;
  color: #2a2a4b;
  height: 43px;
  width: 300px;
  text-align: center;
}
.btn_btn-default
{
  height: 30px;
  width: 100px;
}

	</style>
</head>
<body >
	<?php
		$bid=$_GET['bid'];
		$name=$_GET['name'];
		$authors=$_GET['authors'];
		$edition=$_GET['edition'];
		$status=$_GET['status'];
		$quantity=$_GET['quantity'];
		$department=$_GET['department'];
		$topic=$_GET['topic'];
		$publication=$_GET['publication'];		

	?>
	<div id="main">
	<div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Update Book</b></h2>
    
    <form class="book" action="" method="post">
		<input type="text" name="bid" class="form-control" placeholder="Book id" required="" value='<?php echo $bid; ?>'><br>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required="" value='<?php echo $name; ?>'><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required="" value='<?php echo $authors; ?>'><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required="" value='<?php echo $edition; ?>'><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required="" value='<?php echo $status; ?>'><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required="" value='<?php echo $quantity; ?>'><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required="" value='<?php echo $department; ?>'><br>
        <input type="text" name="topic" class="form-control" placeholder="Topic" required="" value='<?php echo $topic; ?>'><br>
        <input type="text" name="publication" class="form-control" placeholder="Publication" required="" value='<?php echo $publication; ?>'><br>

        <button style="text-align: center;" class="btn_btn-default" type="submit" name="submit">Update</button>
    </form>
    </div>
	<?php 

		if(isset($_POST['submit']))
		{
			$bid=$_POST['bid'];
			$name=$_POST['name'];
			$authors=$_POST['authors'];
			$edition=$_POST['edition'];
			$status=$_POST['status'];
			$quantity=$_POST['quantity'];
            $department=$_POST['department'];
            $topic=$_POST['topic'];
            $publication=$_POST['publication'];

			$sql1= "UPDATE book SET bid='$bid', name='$name', authors='$authors', edition='$edition', status='$status', quantity='$quantity', department='$department', topic='$topic', publication='$publication' WHERE bid = '$bid'";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Updated Successfully.");
						window.location="book.php";
					</script>
				<?php
			}
		}
 	?>
</div>
</body>
</html>

