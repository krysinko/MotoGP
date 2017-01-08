<?php include("../../dbConnection.php");

$sql = "SELECT * from motogp.teams";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br><br><b>Team: </b>" . $row["teamName"]. " <br><b>Rider's name: </b>" . $row["Rider1"]. ", " . $row["Rider2"] ;
        echo " <br><b>Factory team: </b>";
        echo $row["isFactory"]==0 ? "no" : "yes" . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>