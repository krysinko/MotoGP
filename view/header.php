<html>
<head>
    <title>MotoGP world</title>
    <link rel="icon" type="image/png"
          href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/images/favicon.ico">
    <link rel="stylesheet" type="text/css"
          href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/styles/styles.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/scripts/menu.js"></script>
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 basicMargin">
        <ul class="nav nav-tabs nav-justified" id="menu-list">
            <li role="presentation" id="menu-home">
                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/view/index.php">
                    Home
                </a>
            </li>
            <li role="presentation" id="menu-riders">
                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/MotoGP/view/riders/riders.php">
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
            <li role="presentation" id="manu-races">
                <a href="<?php $_SERVER['DOCUMENT_ROOT']; ?>
                /MotoGP/view/race/race.php">
                    Races
                </a>
            </li>
        </ul>
    </div>
</div>

