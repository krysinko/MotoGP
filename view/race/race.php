<?php include("../header.php"); ?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 basicMargin">

            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <td>
                            Track
                        </td>
                        <td>
                            Season
                        </td>
                        <td>
                            Winner
                        </td>
                        <td>
                            Second place
                        </td>
                        <td>
                            Third place
                        </td>
                        <td>
                            Pole
                        </td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php include("../../controllers/race/showRace.php"); ?>
                    </tbody>
                </table>
            </div>


            <br>
            <a class="btn btn-default" href="../../templates/race/addRace.php" role="button">Add race</a>
        </div>
    </div>

<?php include("../footer.php"); ?>