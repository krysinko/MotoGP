<?php include("../../dbConnection.php");

$trackName = isset($_POST['track'])?$_POST['track']:'null';
$winner = isset($_POST['winner'])?$_POST['winner']:'null';
$season = isset($_POST['season'])?$_POST['season']:'null';
$second = isset($_POST['second'])?$_POST['second']:'null';
$third = isset($_POST['third'])?$_POST['third']:'null';
$pole = isset($_POST['pole'])?$_POST['pole']:'null';

$sql = "INSERT INTO race (Track, Season, Winner,  `Second place`, `Third place`, Pole,) VALUES ('$trackName', '$season', '$winner', '$second', '$third', '$pole')";
echo($sql);


if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}
else echo ("<br>Rekord dodany");

$result = $conn->query($sql);

$conn->close();
?>