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
        $id=$row["id"];

        echo
            "<tr><td>" . $row["teamName"]
            . "</td><td>" . $row["Rider1"]
            . "</td><td> " . $row["Rider2"]
            . "</td><td> " . $factory
            . "</td><td>
    <a href='../../controllers/teams/updateTeam.php?teamName=$teamName&rider1=$rider1&rider2=$rider2&isFactory=$isFactory&id=$id'>
        update</a></td>
            </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
