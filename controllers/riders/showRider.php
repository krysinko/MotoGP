<?php include($_SERVER['DOCUMENT_ROOT']."/MotoGP/dbConnection.php");

$sql = "SELECT * from motogp.riders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Team"]. "</td><td> " . $row["Category"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>