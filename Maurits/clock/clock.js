//countdown timer

//tijd moet als input moeten kunnen worden meegegeven.
//er moet per seconde tijd afgehaald worden van het totaal (minuut ook en evt. uur).
//het moet live worden afgespeeld op de pagina.
var uren = "";
var input = document.getElementById("input");
var knop = document.getElementById("knop");
knop.addEventListener("click", function () {
    var tijd = input.value;
    var hoursAndMinutes = tijd.split(":");
    var uren = hoursAndMinutes[0];
    var minuten = hoursAndMinutes[1];
});
if (uren == null) {
    document.getElementById("test"). innerHTML = "Nog niks ingevoerd";
} else {
    document.getElementById("test"). innerHTML = uren;
}















// var upgradeTime = 781458;
// var seconds = upgradeTime;
// function timer() {
//     var days        = Math.floor(seconds/24/60/60);
//     var hoursLeft   = Math.floor((seconds) - (days*86400));
//     var hours       = Math.floor(hoursLeft/3600);
//     var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
//     var minutes     = Math.floor(minutesLeft/60);
//     var remainingSeconds = seconds % 60;
//     function pad(n) {
//         return (n < 10 ? "0" + n : n);
//     }
//     document.getElementById('countdown').innerHTML = pad(days) + ":" + pad(hours) + ":" + pad(minutes) + ":" + pad(remainingSeconds);
//     if (seconds == 0) {
//         clearInterval(countdownTimer);
//         document.getElementById('countdown').innerHTML = "Completed";
//     } else {
//         seconds--;
//     }
// }
// var countdownTimer = setInterval('timer()', 1000);