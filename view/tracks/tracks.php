<?php include("../header.php"); ?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 basicMargin">

            <br>
            <a class="btn btn-default" href="../../templates/tracks/addTrack.php" role="button">Add track</a>
            <br>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Record owner
                        </td>
                        <td>
                            Record
                        </td>
                        <td>
                            Track length
                        </td>
                        <td>
                            Top speed
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php include("../../controllers/tracks/showTrack.php"); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("../footer.php"); ?>