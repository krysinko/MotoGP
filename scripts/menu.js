$(document).ready(function () {
    $currentLocation = window.location.href.substr(window.location.href.lastIndexOf("/MotoGP"));
    console.log($currentLocation);
    $(".nav a").each(function () {

        $hrefAddress = $(this).attr('href');
        console.log("href: " + $hrefAddress);
        if ($hrefAddress.trim() == $currentLocation.trim())
            $(this).parent().addClass("active");
    })
});
