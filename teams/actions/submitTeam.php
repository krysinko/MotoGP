<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "MotoGP";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$teamName = isset($_POST['teamName'])?$_POST['teamName']:'null';
$rider1 = isset($_POST['rider1'])?$_POST['rider1']:'null';
$rider2 = isset($_POST['rider2'])?$_POST['rider2']:'null';
$isFactory = isset($_POST['isFactory'])?$_POST['isFactory']:'null';

//
//$teamName = "honda";
//$rider1 = "dp";
//$rider2 = "mm";
//$isFactory = 1;

$sql = "INSERT INTO teams (teamName, Rider1, Rider2, isFactory) VALUES ( '$teamName', '$rider1', '$rider2','$isFactory')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("Error description: " . mysqli_error($conn));
}else echo "dobrze jest";






$result = $conn->query($sql);
//echo "Entered data successfully\n";

/*if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<b>Team: </b>" . $row["Team"];
        echo " - <b>Riders name: </b>" . $row["Name"];
        echo " - <b>Category:</b> " . $row["Category"] . "<br>";

    }
} else {
    echo "0 results";
}
*/

$conn->close();
?>