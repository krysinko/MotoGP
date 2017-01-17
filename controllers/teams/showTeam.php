<?php include("../../dbConnection.php");

$sql = "SELECT * FROM motogp.teams";
$result = $conn->query($sql);
$team = "teamName";
$rider1 = "Rider1";
$rider2 = "Rider2";
$isFactory = "isFactory";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["isFactory"] == 0) {
            $factory = "Independent";
        }
        else { $factory = "Factory";}
        echo
            "<tr><td>" . $row["teamName"]
            . "</td><td>" . $row["Rider1"]
            . "</td><td> " . $row["Rider2"]
            . "</td><td> " . $factory
            . "</td><td>
            <a href='updateTeam.php?teamName=$row[$team]&Rider1=$row[$rider1]&Rider2=$row[$rider2]&isFactory=$row[$isFactory]'>update</a></td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
