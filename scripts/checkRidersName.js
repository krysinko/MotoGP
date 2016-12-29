var rider1 = $("#rider1").valueOf();
var rider2 = $("#rider2").valueOf();

// rider1.addEventListener("input", checkRidersName());
rider2.on("input", checkRidersName());

console.log(rider1, rider2);
function checkRidersName() {
    console.log(rider1, rider2);
    if (rider1 !== '' && (rider1 == rider2 )) {
        $error = "Rider1 is the same as Rider2!";
        window.alert($error);
    }
}