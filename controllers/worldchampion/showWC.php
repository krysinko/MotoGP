<?php include($_SERVER['DOCUMENT_ROOT'] . "/MotoGP/dbConnection.php");

$sql = "SELECT * FROM motogp.worldchampion";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo
            "<tr><td>" . $row["Season"]
            . "</td><td>" . $row["FactoryTeam"]
            . "</td><td> " . $row["IndependentTeam"]
            . "</td><td> " . $row["Manufacturer"]            . "</td><td> " . $row["RiderWC"]
            . "</td><td> " . $row["Rider2WC"]
            . "</td><td>" . $row["Rider3WC"]
            . "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>