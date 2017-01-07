<script src="../../scripts/raceNotDuplicateWinners.js"></script>
<?php include("../../view/header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-md-offset-1">
        <br>
        <?php include "../../controllers/riders/showRider.php"; ?>
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form action="../../controllers/race/addRace.php" method="post">
            <div class="inputDiv">
           <span>
            Track name:
        </span>
                <input name="track" type="text" id="track">
                <a class="btn btn-default" href="../tracks/addTrack.php" role="button">Add track</a>
<!--                TODO: list of tracks-->
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