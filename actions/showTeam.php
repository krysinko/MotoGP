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

$sql = "SELECT * from motogp.teams";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br><b>Team: </b>" . $row["teamName"]. " <br><b>Rider's name: </b>" . $row["Rider1"]. ", " . $row["Rider2"] ;
        echo " <br><b>Factory team: </b>";
        echo $row["isFactory"]==0 ? "no" : "yes" . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>