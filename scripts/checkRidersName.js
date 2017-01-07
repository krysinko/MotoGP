function checkRidersName() {
    $rider1 = $("#rider1").val();
    $rider2 = $("#rider2").val();
    if ($rider1 !== '' && ($rider1.trim() == $rider2.trim() )) {
        $error = "Rider1 is the same as Rider2!";
        window.alert($error);
        $("#rider1").val("");
        $("#rider2").val("");
    }
}