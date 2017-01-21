<?php
include($_SERVER['DOCUMENT_ROOT'] . "view/header.php");
include($_SERVER['DOCUMENT_ROOT'] . "dbConnection.php");

$team = new team();

$teamName = urldecode($_GET[$argv[0]]);
$rider2 = urldecode($_GET[$argv[1]]);
$rider2 = urldecode($_GET[$argv[2]]);
$isFactory = urldecode($_GET[$argv[3]]);


echo($teamName . $rider2 . $isFactory);
?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 basicMargin">
            <div class="panel panel-default">
                <form action="../../controllers/teams/submitTeam.php" method="post">
                    <div class="inputDiv">
           <span>
            Team name:
        </span>
                        <input name="teamName" type="text" id="teamName">
                    </div>
                    <div class="inputDiv">
           <span>
                Rider1
           </span>

                        <input name="rider1" list="riders" id="rider1" onchange="teamNotDuplicateRiders()">
                        <?php include("../../controllers/riders/chooseRider.php"); ?>
                    </div>
                    <div class="inputDiv">
           <span>
                Rider2
           </span>
                        <input name="rider2" list="riders" id="rider2" onchange="teamNotDuplicateRiders()">
                        <?php include("../../controllers/riders/chooseRider.php"); ?>
                    </div>
                    <div class="inputDiv">
           <span>
                Is the team factory?
           </span>
                        <select name="isFactory" id="isFactory">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div>
                        <input class="btn btn-default" type="submit" value="update team">
                    </div>
                </form>
            </div>

            <br>
            <a class="btn btn-default" href="../../controllers/teams/updateRequest.php" role="button">Update team</a>


        </div>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/MotoGP/view/footer.php");; ?>