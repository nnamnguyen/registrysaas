$(document).ready(function () {
    rowtda = $(".clientinfo tbody tr td.lead").length;
    for (let i = 0; i < rowtda; i++) {
        $(".clientinfo tbody tr td.lead:nth(" + i + ") a").click(function () {
            $id_lead = $(".clientinfo tbody tr td.idlead:nth(" + i + ") p").text();
            // $href = "../prospects/leads.php?id="+$id_lead;
            window.location.href = "../prospects/leads.php?id=" + $id_lead;
        });
        //set downtime
        var endDatetime = $(".clientinfo tbody tr:nth(" + i + ") td .row2 .demnguoc p#end_datetime").text();
        var countDownDate = new Date(endDatetime).getTime();
        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            days = Math.floor(distance / (1000 * 60 * 60 * 24));
            hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            seconds = Math.floor((distance % (1000 * 60)) / 1000);
            $('.clientinfo tbody tr:nth(' + i + ') td .row2 .demnguoc #days').text(days);
            $('.clientinfo tbody tr:nth(' + i + ') td .row2 .demnguoc #hours').text(hours);
            $('.clientinfo tbody tr:nth(' + i + ') td .row2 .demnguoc #minutes').text(minutes);
            $('.clientinfo tbody tr:nth(' + i + ') td .row2 .demnguoc #seconds').text(seconds);

            // If the count down is over, write some text 
            // if (distance < 0) {
            //     clearInterval(x);
            //     document.getElementById("demo").innerHTML = "EXPIRED";
            // }
        }, 1000);
    }
    //set downtime

});