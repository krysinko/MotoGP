<?php include("../../dbConnection.php");

$trackName = isset($_POST['trackName'])?$_POST['trackName']:'null';
$recordOwner = isset($_POST['winner'])?$_POST['winner']:'null';
$record = isset($_POST['record'])?$_POST['record']:'null';
$trackLength = isset($_POST['length'])?$_POST['length']:'null';
$topSpeed = isset($_POST['speed'])?$_POST['speed']:'null';

$sql = "INSERT INTO tracks (Name, `Record owner`, Record, `Track length`, `Top speed`) VALUES ('$trackName', '$recordOwner', '$record', '$trackLength', '$topSpeed')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}else echo "<br>dobrze jest";


$result = $conn->query($sql);

$conn->close();
?>