<html>
<head>
    <title>MotoGP world</title>
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">

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
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-md-offset-1">
        <br>
        <?php
        $serverName = "localhost";
        $username = "root";
        $password = "";
        $dbName = "MotoGP";

        // Create connection
        $conn = new mysqli($serverName, $username, $password, $dbName);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = 'INSERT INTO motogp.teams' .
            '("Team name", Rider1, Rider2, isFactory) ' .
            'VALUES ( "guest", "XYZ", 2000, NOW() )';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<b>Team: </b>" . $row["Team"] . " - <b>Rider's name: </b>" . $row["Name"] . " - <b>Category:</b> " . $row["Category"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </div>
</div>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
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
            <input name="rider1" type="text" id="rider1">
        </div>
        <div class="inputDiv">
           <span>
                Rider2
           </span>
            <input name="rider2" type="text" id="rider2">
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
            <input class="btn btn-default" type="submit" value="Add team">
        </div>

    </div>

</div>
</body>
</html>


mysql_select_db('test_db');
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
die('Could not enter data: ' . mysql_error());
}

