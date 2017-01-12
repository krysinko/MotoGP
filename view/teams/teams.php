<?php include("../header.php"); ?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 basicMargin">
        <br>
        <a class="btn btn-default" href="../../templates/teams/addTeam.php" role="button">Add team</a>

        <div class="panel panel-default">
            <table class="table">
                <thead>
                <tr>
                    <td>
                        Team
                    </td>
                    <td>
                        Rider1
                    </td>
                    <td>
                        Rider2
                    </td>
                    <td>
                        Factory/Independent
                    </td>
                </tr>
                </thead>
                <tbody>
                <?php include "../../controllers/teams/showTeam.php"; ?>
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php include("../footer.php"); ?>