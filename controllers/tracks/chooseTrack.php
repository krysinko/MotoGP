<?php include("../../dbConnection.php");

$get = mysqli_query($conn, "SELECT Name FROM tracks");
?>

<datalist id="track">  <option value="0">Wybierz tor</option>
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
