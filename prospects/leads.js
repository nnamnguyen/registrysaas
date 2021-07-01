$(document).ready(function () {
    var endDatetime = $(".clientinfo .sideleft .infosideleft .fieldclient p#end_datetime").text();
    var countDownDate = new Date(endDatetime).getTime();
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        $('#days').text(days);
        $('#hours').text(hours);
        $('#minutes').text(minutes);
        $('#seconds').text(seconds);

        // If the count down is over, write some text 
        // if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        // }
    }, 1000);
    $('#linktomysite').click(function (e) {
        e.preventDefault();
        aLink = $('#linktomysite').text();
        location.href = '//' + aLink;
    });
});