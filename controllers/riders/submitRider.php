<?php include("../../dbConnection.php");
 include("../../view/header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 basicMargin">

        <div class="panel panel-default error">
<?php

$teamName = isset($_POST['team'])?$_POST['team']:'null';
$riderName = isset($_POST['name'])?$_POST['name']:'null';
$number = isset($_POST['number'])?$_POST['number']:'null';
$country = isset($_POST['country'])?$_POST['country']:'null';
$category = isset($_POST['category'])?$_POST['category']:'null';


$sql = "INSERT INTO riders (Team, Name, Number, Country, Category) VALUES ( '$teamName', '$riderName', '$number','$country', '$category')";
echo($sql);
if (!mysqli_query( $conn,$sql ))
{
    echo("<br>Error description: " . mysqli_error($conn));
}else echo "<br>Dodano rekord do bazy.";

$result = $conn->query($sql);


$conn->close();
?>

        </div>
    </div>
</div>

<?php include("../../view/footer.php"); ?>