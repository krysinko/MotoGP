$(document).ready(function () {
    $currentLocation = window.location.href.substr(window.location.href.lastIndexOf("view/"));
    console.log($currentLocation);
    $(".nav a").each(function () {

        $hrefAddress = $(this).attr('href').substr(window.location.href.lastIndexOf("view"));
        console.log("href: " + $hrefAddress);
        if ($hrefAddress == $currentLocation)
            $(this).parent().addClass("active");
    })
});
