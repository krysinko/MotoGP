<?php include($_SERVER['DOCUMENT_ROOT'] . "/MotoGP/dbConnection.php");

$sql = "SELECT * FROM motogp.tracks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo
            "<tr><td>" . $row["Name"]
            . "</td><td>" . $row["Record owner"]
            . "</td><td> " . $row["Record"]
            . "</td><td> " . $row["Track length"]            . "</td><td> " . $row["Top speed"]
            . "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>