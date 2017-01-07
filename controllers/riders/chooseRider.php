<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motogp";


$conn = new mysqli($servername, $username, $password, $dbname);

$get = mysqli_query($conn, "SELECT Name FROM riders");
?>

<datalist id="riders">  <option value="0">Wybierz zawodnika</option>
    <?php
    while ($row = mysqli_fetch_assoc($get)) {
        ?>
        <option value="<?php echo($row['Name']) ?>">
            <?php echo($row['Name']) ?>
        </option>
        <?php
    }
    ?>
</datalist>
