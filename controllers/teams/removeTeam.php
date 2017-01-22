<?php include('../dbConnection.php');

$id = $_GET['id'];

$sql = "DELETE FROM teams WHERE (id=$id); ";
echo($sql);
if (!mysqli_query($conn, $sql)) {
    echo("<br>Error description: " . mysqli_error($conn));
} else echo "<br><b>Usunięto dane o zespole.</b>";

$result = $conn->query($sql);

$conn->close();
?>