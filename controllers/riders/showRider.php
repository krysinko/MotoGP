<?php include("../../dbConnection.php");

$sql = "SELECT * from motogp.riders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<b>Rider's name: </b>" . $row["Name"]. "<br><b>Team: </b>" . $row["Team"]. "<br><b>Category:</b> " . $row["Category"]. "<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>