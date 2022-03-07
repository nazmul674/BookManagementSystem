
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
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
<body>
  
<div id="main">
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family: Lucida Console; text-align: center"><b>Add New Books</b></h2>
    
    <form class="book" action="" method="post">
        
        <input type="text" name="bid" class="form-control" placeholder="Book id" required=""><br>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>
        <input type="text" name="topic" class="form-control" placeholder="Topic" required=""><br>
        <input type="text" name="publication" class="form-control" placeholder="Publication" required=""><br>

        <button style="text-align: center;" class="btn_btn-default" type="submit" name="submit">ADD</button>
    </form>
  </div>
<?php
    if(isset($_POST['submit']))
    {
        mysqli_query($db,"INSERT INTO book VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]' , '$_POST[topic]', '$_POST[publication]') ;");
        ?>
        <script type = "text/javascript">
          alert("Book Added Successfully.");
        </script>
        <?php
    }
?>
</div>

</body>
</html>