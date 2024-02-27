<?php
$conn = mysqli_connect("localhost", "root", "", "login");
if($conn === false)
{
die("ERROR: Could not connect. "
. mysqli_connect_error());
}
$SNO = $_REQUEST['S.NO'];
$Username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$sql = "INSERT INTO login VALUES ('S.NO','$Username','$password')";
if(mysqli_query($conn, $sql))
{
echo "<h3>data stored in a database successfully";
}
else
{
echo "ERROR: Hush! Sorry " . mysqli_error($conn);
}
mysqli_close($conn);
?>