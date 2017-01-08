<?php include("../../dbConnection.php");

$getManufacturer = mysqli_query($conn, "SELECT teamName FROM teams");
$getFactory = mysqli_query($conn, "SELECT teamName FROM teams WHERE isFactory=1");
$getIndependent = mysqli_query($conn, "SELECT teamName FROM teams WHERE isFactory=0");
?>

<datalist id="manufacturer">
    <option value="0">Wybierz zespół</option>
    <?php
    while ($row = mysqli_fetch_assoc($getManufacturer)) {
        ?>
        <option value="<?php echo($row['teamName']) ?>">
            <?php echo($row['teamName']) ?>
        </option>
        <?php
    }
    ?>
</datalist>

<datalist id="independent">
    <option value="0">Wybierz zespół</option>
    <?php
    while ($row = mysqli_fetch_assoc($getIndependent)) {
        ?>
        <option value="<?php echo($row['teamName']) ?>">
            <?php echo($row['teamName']) ?>
        </option>
        <?php
    }
    ?>
</datalist>

<datalist id="factory">
    <option value="0">Wybierz zespół</option>
    <?php
    while ($row = mysqli_fetch_assoc($getFactory)) {
        ?>
        <option value="<?php echo($row['teamName']) ?>">
            <?php echo($row['teamName']) ?>
        </option>
        <?php
    }
    ?>
</datalist>