
<?php include("../header.php");?>

<div class="row">
    <div class="col-xs-10 col-md-offset-1">
        <br>
        <?php include "actions/showRider.php"; ?>
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <form action="actions/submitRider.php" method="post">
            <div class="inputDiv">
           <span>
            Team name:
        </span>
                <input name="team" type="text" id="team">
            </div>
            <div class="inputDiv">
           <span>
                Name:
           </span>
                <input name="name" type="text" id="name">
            </div>
            <div class="inputDiv">
           <span>
                Number:
           </span>
                <input name="number" type="text" id="number">
            </div>
            <div class="inputDiv">
           <span>
                Country:
           </span>
                <input name="country" type="text" id="country">
            </div>
            <div class="inputDiv">
                <span>
                    Category:
                </span>
                <select name="category" id="category">
                    <option value="MotoGP">MotoGP</option>
                    <option value="Moto2">Moto2</option>
                    <option value="Moto3">Moto3</option>
                </select>
            </div>
            <div>
                <input class="btn btn-default" type="submit" value="Add rider">
            </div>
        </form>
    </div>
</div>


<?php include("../footer.php"); ?>
