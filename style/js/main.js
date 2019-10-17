$(function() {
    var navbar = $('.navbar');
    $(window).scroll(function() {
        if($(window).scrollTop() <= 5) {
            navbar.removeClass('navbar-scroll');
        } else {
            navbar.addClass('navbar-scroll');
        }
    });
});


$(document).ready(function(){

    $('.input').focus(function(){
      $(this).parent().find(".label-txt").addClass('label-active');
    });

    $(".input").focusout(function(){
      if ($(this).val() == '') {
        $(this).parent().find(".label-txt").removeClass('label-active');
      };
    });

  });



function openDiv() {
    document.getElementById("mySidediv").style.width = "250px";
    document.getElementById('btnspan').style.display = "none";
    document.getElementById('clobtn').style.display = "block";
    document.getElementById('deletebtn').style.display = "block";
}

function closeDiv() {
    document.getElementById("mySidediv").style.width = "0";
    var btnspan = document.getElementById('btnspan').style.display = "block";
    document.getElementById('clobtn').style.display = "none";
    document.getElementById('deletebtn').style.display = "none";
}
