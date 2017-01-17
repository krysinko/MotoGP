<script src="../../scripts/notDuplicateWinners.js"></script>

<?php include("../../view/header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form action="../../controllers/worldchampion/submitWC.php" method="post">
            <div class="inputDiv">
                <span>
                    Season:
                </span>
                <input name="season" type="number" id="season" value="2016">
            </div>
            <div class="inputDiv">
                <span>
                Factory team:
                </span>
                <?php include("../../controllers/teams/chooseTeam.php"); ?>
                <input name="factory" list="factory" id="factory">

            </div>
            <div class="inputDiv">
                <span>
                Independent team:
                </span>
                <input name="independent" list="independent" id="independent">
                <?php include("../../controllers/teams/chooseTeam.php"); ?>
            </div>
            <div class="inputDiv">
                <span>
                Manufacturer:
                </span>
                <input name="manufacturer" list="manufacturer" id="manufacturer">
                <?php include("../../controllers/teams/chooseTeam.php"); ?>
            </div>
            <div class="inputDiv">
                <span>
                    World champion:
                </span>
                <input name="winner" list="riders" id="winner" onchange="raceNotDuplicateWinners()">
                <?php include("../../controllers/riders/chooseRider.php"); ?>
            </div>
            <div class="inputDiv">
                <span>
                    2'nd champion:
                                    </span>
                <input name="second" list="riders" id="second" onchange="raceNotDuplicateWinners()">
                <?php include("../../controllers/riders/chooseRider.php"); ?>
            </div>
            <div class="inputDiv">
                <span>
                    3'rd champion:
                </span>
                <input name="third" list="riders" id="third" onchange="raceNotDuplicateWinners()">
                <?php include("../../controllers/riders/chooseRider.php"); ?>
            </div>
            <div>
                <input class="btn btn-default" type="submit" value="Add results">
            </div>
        </form>
    </div>
</div>
