$(document).ready(function () {
    var endDatetime = $("p#end_datetime").text();
    var countDownDate = new Date(endDatetime).getTime();
    var days = 0;
    var hours = 0;
    var minutes = 0;
    var seconds = 0;
    var x = setInterval(function () {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        days = Math.floor(distance / (1000 * 60 * 60 * 24));
        hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        seconds = Math.floor((distance % (1000 * 60)) / 1000);
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
    $('.giahan').click(function (e) {
        e.preventDefault();
        var Id_lead = $(".giahan").attr("data-id");
        $.ajax({
            type: "POST",
            url: "../api-php/stopdeployment.php",
            data: {
                'id_lead': Id_lead,
            },
            caches: false,
            success: function (kq) {
                alert(kq);                                
            }
        })
    });
    $('.btnrollback').click(function (e) {
        e.preventDefault();
        window.location.href = "../pageadmin/admis.php";
    });
});