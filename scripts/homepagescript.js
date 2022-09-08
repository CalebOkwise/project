$(document).ready(function(){

    $row2form2 = $('.row2form2');
    $trigger = $('.trigger');
    $btn = $('.herobtn');
    $overlay = $('.overlay');
    $popupcloser = $('.cancelbtn');
    $herorow2 = $('.herorow2');
    $body = $('body');
    $nav = $('.nav');
    $l1 = $('.l1');
    $l2 = $('.l2');
    $l3 = $('.l3');
    $hamburger = $('.hamburger');
    $overlay2 = $('.overlay2');
    $nav = $('.nav');
    $overlay3 = $('.overlay3');
    $body = $('.body');
    $herobtn = $('.mobileformpopup');

   

    var lastScrollTop = 0;
    var scrollPoint1 = 856;
    var scrollPoint2 = 1767;
    var scrollPoint3 = 3008;
    var scrollPoint4 = 3870;
    var scrollPoint5 = 4696;
    $(window).scroll(function () {
        var currentScrollPosition = $(this).scrollTop();
        if (currentScrollPosition > scrollPoint1){
            $nav.css("background-color", "#fff");  
        } else {
            $nav.css("background-color", "#fcfdf2");
        }
    })

    $(window).scroll(function () {
        var currentScrollPosition = $(this).scrollTop();
        if (currentScrollPosition > scrollPoint1 && scrollPoint2 > currentScrollPosition){
            $l1.css("color", "#EF5C26");
        } else {
            $l1.css("color", "#161616");
        }

        if (currentScrollPosition > scrollPoint2 && scrollPoint3 > currentScrollPosition){
            $l2.css("color", "#EF5C26");
        } else {
            $l2.css("color", "#161616");
        }

        if (currentScrollPosition > scrollPoint4 && scrollPoint5 > currentScrollPosition){
            $l3.css("color", "#EF5C26");
        } else {
            $l3.css("color", "#161616");
        }
    })



    /*  $btn.click(function (){
        document.getElementById("theForm").submit();
    })

    */


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

    $hamburger.click(function (){
        $overlay2.toggleClass('off');
        $nav.toggleClass('off');
    })

    $('.phoneclose').click(function (){
        $overlay2.toggleClass('off');
        $nav.toggleClass('off');
    })
   
    $('.mobilenavlink').click(function (){
        $overlay2.toggleClass('off');
        $nav.toggleClass('off');
    })

    $('.bknappointment').click(function (){
        $overlay2.toggleClass('off');
        $nav.toggleClass('off');
        $overlay3.toggleClass('off');
        document.getElementById("body").setAttribute("class", "body yscroll");
    })

    $('.closerbtn').click(function (){
        $overlay3.toggleClass('off');
        $body.toggleClass('yscroll');
    })

    $herobtn.click(function (){
        $overlay3.toggleClass('off');
        document.getElementById("body").setAttribute("class", "body yscroll");
    })
})
