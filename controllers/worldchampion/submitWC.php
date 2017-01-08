<?php include("../../dbConnection.php");

$season = isset($_POST['season'])?$_POST['season']:'null';
$factory = isset($_POST['factory'])?$_POST['factory']:'null';
$independent = isset($_POST['independent'])?$_POST['independent']:'null';
$manufacturer = isset($_POST['manufacturer'])?$_POST['manufacturer']:'null';
$winner = isset($_POST['winner'])?$_POST['winner']:'null';
$second = isset($_POST['second'])?$_POST['second']:'null';
$third = isset($_POST['third'])?$_POST['third']:'null';

$sql = "INSERT INTO worldchampion (Season, FactoryTeam, IndependentTeam, Manufacturer, RiderWC, Rider2ndWC, Rider3WC) VALUES ('$season', '$factory', '$independent', '$manufacturer', '$winner', '$second', '$third')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}else echo "<br>dobrze jest";


$result = $conn->query($sql);

$conn->close();
?>