<?php
include("../../view/header.php");
include("../dbConnection.php");

$team = new team();

$teamName = $_GET['teamName'];
$rider1 = $_GET['rider1'];
$rider2 = $_GET['rider2'];
$isFactory = $_GET['isFactory'];
$id=$_GET['id'];
?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 basicMargin">
                <form action="../teams/updateRequest.php?id=<?php echo $id; ?>" method="post">
                    <div class="inputDiv">
                    <span>
                    Team name:
                    </span>

                        <input name="teamName" type="text" id="teamName"
                               value="<?php echo $teamName ?>">
                    </div>

                    <div class="inputDiv">
                    <span>
                        Rider1
                    </span>

                        <input name="rider1" list="riders" id="rider1" onchange="teamNotDuplicateRiders()"
                               value="<?php echo $rider1 ?>">
                        <?php include("../../controllers/riders/chooseRider.php"); ?>
                    </div>

                    <div class="inputDiv">
                    <span>
                        Rider2
                    </span>
                        <input name="rider2" list="riders" id="rider2" onchange="teamNotDuplicateRiders()"
                               value="<?php echo $rider2 ?>">
                        <?php include("../../controllers/riders/chooseRider.php"); ?>
                    </div>

                    <div class="inputDiv">
                    <span>
                        Is the team factory?
                    </span>
                        <select name="isFactory" id="isFactory"
                                value="<?php echo $isFactory ?>">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div>
                        <input class="btn btn-default" type="submit" value="Update team">
                    </div>
                </form>

            <br>


        </div>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/MotoGP/view/footer.php");; ?>