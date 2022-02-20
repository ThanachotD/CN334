<?php

$id = $_POST['id'];
$con = mysqli_connect("localhost","root","","portfolio");
$query ="select * from posts where id = $id";
$result= mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$outp = $row["description"];
echo $outp;

?>

