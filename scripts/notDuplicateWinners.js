function raceNotDuplicateWinners() {
    $winner = $("#winner").val();
    $second = $("#second").val();
    $third = $("#third").val();

    if ( $winner == $second) {
        window.alert("winner = second");
        $("#winner").val("");
        $("#second").val("");

    }
    if ( $winner == $third) {
        window.alert("winner = third");
        $("#winner").val("");
        $("#third").val("");
    }
    if ( $second == $third) {
        window.alert("second = third");
        $("#second").val("");
        $("#third").val("");
    }
}