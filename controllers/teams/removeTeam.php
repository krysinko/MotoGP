<?php include('../dbConnection.php');
include("../../view/header.php");  ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 basicMargin">

        <div class="panel panel-default error">
<?php

$id = $_GET['id'];

$sql = "DELETE FROM teams WHERE (id=$id); ";
echo($sql);
if (!mysqli_query($conn, $sql)) {
    echo("<br>Error description: " . mysqli_error($conn));
} else echo "<br><b>Usunięto dane o zespole.</b>";

$result = $conn->query($sql);

$conn->close();
?>

</div>
</div>
</div>

<?php include("../../view/footer.php"); ?>
