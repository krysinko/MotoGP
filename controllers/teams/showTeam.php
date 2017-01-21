<?php include("../../dbConnection.php");

$sql = "SELECT * FROM motogp.teams";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["isFactory"] == 0) {
            $factory = "Independent";
        }
        else { $factory = "Factory";}
        $isFactory = $factory;

        $teamName = $row["teamName"];
        $rider1 = $row["Rider1"];
        $rider2 = $row["Rider2"];

        echo
            "<tr><td>" . $row["teamName"]
            . "</td><td>" . $row["Rider1"]
            . "</td><td> " . $row["Rider2"]
            . "</td><td> " . $factory
            . "</td><td>
    <a href='updateTeam.php?$teamName+$rider1+$rider2+$isFactory'>
        update</a></td>
            </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
