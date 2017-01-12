<?php include("../header.php"); ?>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 basicMargin">
            <br>
            <a class="btn btn-default" href="../../templates/worldchampion/addSeasonResults.php" role="button">Add season results</a>
            <div class="panel panel-default">
                <table class="table">
                <thead>
                <tr>
                    <td>
                        Season
                    </td>
                    <td>
                        Factory team
                    </td>
                    <td>
                        Independent team
                    </td>
                    <td>
                        Manufacturer
                    </td>
                    <td>
                        Rider Champion
                    </td>
                    <td>
                        Second Champion
                    </td>
                    <td>
                        Third Champion
                    </td>
                </tr>
                </thead>
                <tbody>
                <?php include '../../controllers/worldchampion/showWC.php'; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("../footer.php"); ?>