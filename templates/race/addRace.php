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
            </div>