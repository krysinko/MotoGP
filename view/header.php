<html>
<head>
    <title>MotoGP world</title>
    <link rel="icon" type="image/png"
          href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/images/favicon.ico">
    <link rel="stylesheet" type="text/css"
          href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/styles/styles.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <script src="http://localhost/MotoGP/scripts/menu.js"></script>
    <script src="http://localhost/MotoGP/scripts/notDuplicateWinners.js"></script>
    <script src="http://localhost/MotoGP/scripts/teamNotDuplicateRiders.js"></script>
</head>
<body>
<div class="row">
    <div class="col-xs-10 basicMargin">
        <div class="menu-container">
            <ul class="nav nav-tabs nav-justified" id="menu-list">
                <li role="presentation" id="menu-home">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                    /MotoGP/view/index.php">
                        Home
                    </a>
                </li>
                <li role="presentation" id="menu-riders">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                    /MotoGP/view/riders/riders.php">
                        Riders
                    </a>
                </li>
                <li role="presentation" id="menu-teams">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                /MotoGP/view/teams/teams.php">
                        Teams
                    </a>
                </li>
                <li role="presentation" id="menu-wc">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                /MotoGP/view/worldchampion/worldchampion.php">
                        World championship
                    </a>
                </li>
                <li role="presentation" id="menu-tracks">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                /MotoGP/view/tracks/tracks.php">
                        Tracks
                    </a>
                </li>
                <li role="presentation" id="menu-races">
                    <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                /MotoGP/view/race/race.php">
                        Races
                    </a>
                </li>
                <li role="presentation" id="menu-dropdown" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                       role="button" aria-haspopup="true" aria-expanded="false">
                        Add... <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/MotoGP/templates/race/addRace.php"
                               role="button">Race</a>
                        </li>
                        <li>
                            <a href="http://localhost/MotoGP/templates/riders/addRider.php"
                               role="button">Rider</a>
                        </li>
                        <li>
                            <a href="http://localhost/MotoGP/templates/teams/addTeams.php"
                               role="button">Teams</a>
                        </li>
                        <li>
                            <a href="http://localhost/MotoGP/templates/tracks/addTrack.php"
                               role="button">Track</a>
                        </li>
                        <li>
                            <a href="http://localhost/MotoGP/templates/worldchampion/addSeasonResults.php"
                               role="button">Season</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

