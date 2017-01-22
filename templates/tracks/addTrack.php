<script src="../../scripts/lapTime.js"></script>
<?php include("../../view/header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form action="../../controllers/tracks/submitTrack.php" method="post">
            <div class="inputDiv">
           <span>
            Track name:
        </span>
                <input name="trackName" type="text" id="trackName">
            </div>
            <div class="inputDiv">
                <span>
                    Record owner:
                </span>
                <input name="winner" list="riders" id="winner">
                <?php include("../../controllers/riders/chooseRider.php"); ?>

                <a class="btn btn-default" href="../riders/addRider.php" role="button">Add rider</a>
            </div>
            <div class="inputDiv">
                <span>
                    Record:
                                    </span>
<!--                TODO: text - walidacja przez js: 00:00:000, tak samo dla track length i top speed.-->
                <input name="record" id="record" type="text" placeholder="mm:ss:ms" maxlength="9" onchange="convertTime()">
            </div>
            <div class="inputDiv">
                <span>
                    Track length:
                </span>
                <input name="length" id="length" type="number" value="3">
            </div>
            <div class="inputDiv">
                <span>
                    Top speed (km/h):
                </span>
                <input name="speed"  id="speed" type="number" value="320">
            </div>
            <div>
                <br>
                <input class="btn btn-default" type="submit" value="Add track">
            </div>
        </form>
    </div>
</div>
