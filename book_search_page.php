<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {
			margin: 0px;
		}
		.topbar {
			border: 1px solid black;
			width: device-width;
			height: 50px;
			margin-top: 0px;
			margin-bottom: 5px;
			border-radius: 10px;
			background-color: black;
			color: white;
			font-family: Arial sans-serif;
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			padding-right: 15px;
			padding-left: 15px;
		}
		.table {
			width: 100%;
			padding-left: 10px;
			padding-right: 10px;
			margin: 0px;
		}
		.searchBar {
			width: device-width;
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: right;
		}
		span {
			padding: 5px;
		}
		td, th {
			border: 1px solid #dddddd;
		  	text-align: left;
		  	padding: 4px;
		}
		tr:nth-child(even) {
			background-color: #dddddd;
		}
		tr:hover {background-color: #D6EEEE;}
		.title {
			padding-top: 2px;
			padding-left: 14px;
			font-family: Arial;
			font-size: 1.2em;
			font-weight: bold;
			color: rgb(55, 64, 75);
		}
		input[type=text] {

			margin-top: 10px;
			margin-left: 12px;
			margin-right: 12px;
		  	width: 500px;
		  	height: 40px;
		  	box-sizing: border-box;
		  	border: 2px solid #ccc;
		  	border-radius: 4px;
		  	font-size: 1em;
		  	background-color: white;
		  	background-image: url('searchicon.png');
		  	background-position: 10px 7px; 
		  	background-repeat: no-repeat;
		  	padding: 12px 15px 12px 40px;
		  	transition: width 0.4s ease-in-out;
		  	transition: width 0.4s ease-in-out;

		}
		input[type=submit] {
			font-size: 1em;
			margin-right: 15px;
			height: 28px;
			border: 5px solid balck;
		}
	</style>
</head>
<body>
	<div class="topbar">
		<span>Home</span>
		<span>Books</span>
		<span>Profile</span>
		<span>Borrowed Books</span>
		<span>Request</span>
		<span>Account</span>
		<span>Log Out</span>
	</div>
	<div class="searchBar">
		<form method="post" action="book_search_page.php">
			<input type="text" name="search" placeholder="Search Books..">
			<input type=submit value=Search>
		</form>
	</div>
	
	<div class="title">Book List:</div>
	<?php
			$search = $_POST["search"];
			require_once('db_connect.php');
			$connect = mysqli_connect( HOST, USER, PASS, DB )
				or die("Can not connect");
			if(strlen($search) < 1){
				$q=mysqli_query($connect,"SELECT * from book");
			}
			if(strlen($search) > 1){
				$q=mysqli_query($connect,"SELECT * from book WHERE name= '$search'");
			}

			if(mysqli_num_rows($q) == 0)
			{
				echo "Sorry! No book found. Try searching again.";
			}
			else
			{
			echo "<table class='table'>";
			echo "<tr class='column' style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "ID";	echo "</th>";
				echo "<th>"; echo "Title";  echo "</th>";
				echo "<th>"; echo "Authors";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
				echo "<th>"; echo "Status";  echo "</th>";
				echo "<th>"; echo "Quantity";  echo "</th>";
				echo "<th>"; echo "Department";  echo "</th>";
				echo "<th>"; echo "Topic";  echo "</th>";
				echo "<th>"; echo "Publication";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['authors']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "<td>"; echo $row['status']; echo "</td>";
				echo "<td>"; echo $row['quantity']; echo "</td>";
				echo "<td>"; echo $row['department']; echo "</td>";
				echo "<td>"; echo $row['topic']; echo "</td>";
				echo "<td>"; echo $row['publication']; echo "</td>";

				echo "</tr>";
			}
			echo "</table>";
			}
	?>
</body>
</html>