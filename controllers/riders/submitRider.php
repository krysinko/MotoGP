<?php include("../../dbConnection.php");

//
//$teamName = isset($_POST['teamName'])?$_POST['teamName']:'null';
//$rider1 = isset($_POST['rider1'])?$_POST['rider1']:'null';
//$rider2 = isset($_POST['rider2'])?$_POST['rider2']:'null';
//$isFactory = isset($_POST['isFactory'])?$_POST['isFactory']:'null';


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
}else echo "<br>dobrze jest";






$result = $conn->query($sql);


$conn->close();
?>