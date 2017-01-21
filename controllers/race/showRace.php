<?php include($_SERVER['DOCUMENT_ROOT']."/MotoGP/dbConnection.php");

$sql = "SELECT * from motogp.race ORDER BY Season DESC, Track ASC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo
            "<tr><td>" . $row["Track"]
            . "</td><td>" . $row["Season"]
            . "</td><td> " . $row["Winner"]
            . "</td><td> " . $row["Second place"]
            . "</td><td> " . $row["Third place"]
            . "</td><td> " . $row["Pole"]. "</td>"."</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>