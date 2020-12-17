$(function() {
    myTimer();
    setInterval(function(){ myTimer() }, 1000);
    function myTimer()
    {
        var y = new Date();
        var time = y.toLocaleTimeString();
        var year = y.getFullYear();
        var month = y.getMonth() + 1;
        var day = y.getDate();
        document.getElementById("dateAndTime").innerHTML = "" + day + "/" + month + "/" + year + " " + time + " (GMT + 0)";
    }
});