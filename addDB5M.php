<?php
$conn = mysqli_connect("localhost", "root", "", "programsix");
if($conn === false)
{
die("ERROR: Could not connect. "
. mysqli_connect_error());
}
$Question1 = $_REQUEST['Question1'];
$Question2 = $_REQUEST['Question2'];
$Question3 = $_REQUEST['Question3'];
$Question4 = $_REQUEST['Question4'];
$Question5 = $_REQUEST['Question5'];
$sql = "INSERT INTO 5mark VALUES ('S.NO','$Question1','$Question2','$Question3','$Question4','$Question5')";
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

