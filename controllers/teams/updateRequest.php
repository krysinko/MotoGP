<?php include('../dbConnection.php');

$teamName = isset($_POST['teamName']) ? $_POST['teamName'] : 'null';
$rider1 = isset($_POST['rider1']) ? $_POST['rider1'] : 'null';
$rider2 = isset($_POST['rider2']) ? $_POST['rider2'] : 'null';
$isFactory = isset($_POST['isFactory']) ? $_POST['isFactory'] : 'null';
$id = $_GET['id'];

$sql = "UPDATE teams SET  teamName='$teamName', Rider1='$rider1', Rider2='$rider2', isFactory=$isFactory               
WHERE (id=$id); ";
echo($sql);
if (!mysqli_query($conn, $sql)) {
    echo("<br>Error description: " . mysqli_error($conn));
} else echo "<br><b>Zaktualizowano dane o zespole.</b>";

$result = $conn->query($sql);

$conn->close();
?>