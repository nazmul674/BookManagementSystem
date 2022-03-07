<?php

$bid = $_GET['bid'];

error_reporting(0);
$db = mysqli_connect("localhost", "root", "", "library");
$status = 'OK';
$content = [];
if (mysqli_connect_errno()) {
$status = 'ERROR';
$content = mysqli_connect_error();
}
$sql1="DELETE FROM book WHERE bid=$bid";
if ($result = mysqli_query($db, $sql1)) {
/* fetch associative array */
while ($row = mysqli_fetch_assoc($result)) {
$content[] = $row; // push value to array
}
}
$data = ["status" => $status, "content" => $content];
header('Content-type: application/json');
echo json_encode($data); // get all products in json format.
?>
