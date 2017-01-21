<?php include("../../dbConnection.php");


$teamName = isset($_POST['teamName'])?$_POST['teamName']:'null';
$rider1 = isset($_POST['rider1'])?$_POST['rider1']:'null';
$rider2 = isset($_POST['rider2'])?$_POST['rider2']:'null';
$isFactory = isset($_POST['isFactory'])?$_POST['isFactory']:'null';

$requestID = "SELECT MAX(id) from teams";
$maxID = $conn -> query($requestID);



$sql = "INSERT INTO teams (teamName, Rider1, Rider2, isFactory, id) VALUES ( '$teamName', '$rider1', '$rider2','$isFactory', '$maxID+1')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}
else echo "<br>dobrze jest";

$result = $conn->query($sql);

$conn->close();
?>