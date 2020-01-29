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

function openDiv() {
    document.getElementById("mySidediv").style.width = "300px";
    document.getElementById('btnspan').style.display = "none";
    document.getElementById('clobtn').style.display = "block";
    document.getElementById('deletebtn').style.display = "block";
}

function closeDiv() {
    document.getElementById("mySidediv").style.width = "0px";
    var btnspan = document.getElementById('btnspan').style.display = "block";
    document.getElementById('clobtn').style.display = "none";
    document.getElementById('deletebtn').style.display = "none";
}
