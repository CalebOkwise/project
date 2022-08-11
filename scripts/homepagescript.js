$(document).ready(function(){

    $row2form2 = $('.row2form2');
    $trigger = $('.row2trigger');

    /** */
    $trigger.click(function (){

        $row2form2.toggleClass('off');
        $trigger.toggleClass('off');
        document.getElementById("animate").setAttribute("class", "herorow2 heightincrease");

    })

})