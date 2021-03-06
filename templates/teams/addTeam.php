
<?php include("../../view/header.php"); ?>
<head>
    <script src="../../scripts/checkRidersName.js"></script>
</head>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
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

                <a class="btn btn-default" href="../riders/addRider.php" role="button">Add rider</a>
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
                <br>
                <input class="btn btn-default" type="submit" value="Add team">
            </div>
        </form>
    </div>
</div>

<?php include("../../view/footer.php"); ?>
