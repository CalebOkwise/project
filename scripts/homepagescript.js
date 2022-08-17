$(document).ready(function(){

    $row2form2 = $('.row2form2');
    $trigger = $('.row2trigger');
    $btn = $('.herobtn');
    $overlay = $('.overlay');
    $popupcloser = $('.cancelbtn');
    $herorow2 = $('.herorow2');


    /** */
    $trigger.click(function (){

        $row2form2.toggleClass('off');
        $popupcloser.toggleClass('off');
        $trigger.toggleClass('off');
        $btn.toggleClass('off');
        $overlay.toggleClass('off');
        document.getElementById("animate").setAttribute("class", "herorow2 popupstyle");

    })

    $popupcloser.click(function (){
        $row2form2.toggleClass('off');
        $popupcloser.toggleClass('off');
        $trigger.toggleClass('off');
        $btn.toggleClass('off');
        $overlay.toggleClass('off');
        $herorow2.toggleClass('popupstyle');

    })

})
