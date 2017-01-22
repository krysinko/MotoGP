<script src="../../scripts/notDuplicateWinners.js"></script>
<?php include("../../view/header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form action="../../controllers/race/submitRace.php" method="post">
            <div class="inputDiv">
           <span>
            Track name:
        </span>
                <?php include("../../controllers/tracks/chooseTrack.php"); ?>
                <input name="track" type="text" id="track" list="track">
                <a class="btn btn-default" href="../tracks/addTrack.php" role="button">Add track</a>
            </div>
            <div class="inputDiv">
                <span>
                    Season:
                </span>
                <input name="season" type="number" id="season" value="2016">
            </div>
            <div class="inputDiv">
                <span>
                    Winner:
                </span>
                <input name="winner" list="riders" id="winner" onchange="raceNotDuplicateWinners()">
                <?php include("../../controllers/riders/chooseRider.php"); ?>
                <a class="btn btn-default" href="../riders/addRider.php" role="button">Add rider</a>

            </div>
            <div class="inputDiv">
                <span>
                    2'nd place:
                                    </span>
                <input name="second" list="riders" id="second" onchange="raceNotDuplicateWinners()">
                <?php include("../../controllers/riders/chooseRider.php"); ?>
            </div>
            <div class="inputDiv">
                <span>
                    3'rd place:
                </span>
                <input name="third" list="riders" id="third" onchange="raceNotDuplicateWinners()">
                <?php include("../../controllers/riders/chooseRider.php"); ?>
            </div>
            <div class="inputDiv">
                <span>
                    Pole:
                </span>
                <input name="pole" list="riders" id="pole">
                <?php include("../../controllers/riders/chooseRider.php"); ?>

            </div>
            <div>
                <br>
                <input class="btn btn-default" type="submit" value="Add race">
            </div>
        </form>
    </div>
</div>
