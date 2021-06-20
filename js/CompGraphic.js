/*Handles looping animation of competiton graphic*/
$(document).ready(function () {
    var div = $("#CompetitionGraphic");
    startAnimation();

    function startAnimation() {
        div.animate({
            left: "1600"
        }, 8000);
        div.animate({
            left: "-500"
        }, 8000, startAnimation);
    }



});
