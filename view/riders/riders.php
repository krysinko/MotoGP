<?php include("../header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 basicMargin">
       <div class="panel panel-default">
        <table class="table">
            <thead>
            <tr>
                <td>
                    First name
                </td>
                <td>
                    Team
                </td>
                <td>
                    Category
                </td>
            </tr>
            </thead>
            <tbody>
        <?php include("../../controllers/riders/showRider.php"); ?>
            </tbody>
        </table></div>
        <br>
        <a class="btn btn-default" href="../../templates/riders/addRider.php" role="button">Add rider</a>
        <br>

    </div>
</div>

<?php include("../footer.php"); ?>