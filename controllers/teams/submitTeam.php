<?php include("../../dbConnection.php");
include("../../view/header.php"); ?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 basicMargin">

            <div class="panel panel-default error">
<?php

$teamName = isset($_POST['teamName'])?$_POST['teamName']:'null';
$rider1 = isset($_POST['rider1'])?$_POST['rider1']:'null';
$rider2 = isset($_POST['rider2'])?$_POST['rider2']:'null';
$isFactory = isset($_POST['isFactory'])?$_POST['isFactory']:'null';


$sql = "INSERT INTO teams (teamName, Rider1, Rider2, isFactory) VALUES ( '$teamName', '$rider1', '$rider2','$isFactory')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}
else echo "<br>Dodano rekord do bazy.";

$result = $conn->query($sql);

$conn->close();
?>


            </div>
        </div>
    </div>

<?php include("../../view/footer.php"); ?>
