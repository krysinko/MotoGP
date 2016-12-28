<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "motogp";


$conn = new mysqli($serverName, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
//$teamName = isset($_POST['teamName'])?$_POST['teamName']:'null';
//$rider1 = isset($_POST['rider1'])?$_POST['rider1']:'null';
//$rider2 = isset($_POST['rider2'])?$_POST['rider2']:'null';
//$isFactory = isset($_POST['isFactory'])?$_POST['isFactory']:'null';


$teamName = "yamaha";
$riderName = "rossi";
$number = 46;
$country = "italy";
$category = "motogp";

$sql = "INSERT INTO riders (Team, Name, Number, Country, Category) VALUES ( '$teamName', '$riderName', '$number','$country', '$category')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}else echo "<br>dobrze jest";






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