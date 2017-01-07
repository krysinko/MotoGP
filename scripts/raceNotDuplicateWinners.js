function raceNotDuplicateWinners() {
    $winner = $("#winner").val();
    $second = $("#second").val();
    $third = $("#third").val();

    if ( $winner == $second) {
        window.alert("winner = second");
    }
    if ( $winner == $third) {
        window.alert("winner = third");
    }
    if ( $second == $third) {
        window.alert("second = third");
    }
}