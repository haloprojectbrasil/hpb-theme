window.onscroll = function() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll-top-btn").style.display = "block";
        $("#zmenu").html($("#sticky-menu").html());
        $("#zmenu").css("display", "block");
    } else {
        document.getElementById("scroll-top-btn").style.display = "none";
        $("#zmenu").html("");
        $("#zmenu").css("display", "none");
    }

}

function jumpTop() {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}

// $("#mobile-menu").parent().on("click", function() {
//     $("#mobile-menu").click();
// })

$('#nav').find('ul').removeClass();
$('#nav').find('ul').removeAttr('id');
$('#nav').find('ul').removeAttr('class');
$('#nav').find('li').removeClass();
$('#nav').find('li').removeAttr('id');
$('#nav').find('li').removeAttr('class');
$('#nav').find('div:first').removeClass();
$('#nav').find('ul:first').addClass('vertical medium-horizontal menu');
$('#nav').find('ul:first').attr('data-responsive-menu', 'small-drilldown medium-dropdown');
$('#nav').find('ul').addClass('menu');

$('#prevnext').find('a').addClass('button');

$(".headers > .top-bar > button > .fi-list").parent().on("click", function() {
    $(this).toggleClass("activated");
});

$('#ftd-1').hover(function(){
    $(this).find('.ftd-lorem').css('visibility', 'visible');
}, function(){
    $(this).find('.ftd-lorem').css('visibility', 'hidden');
});

$('#ftd-2').hover(function(){
    $(this).find('.ftd-lorem').css('visibility', 'visible');
}, function(){
    $(this).find('.ftd-lorem').css('visibility', 'hidden');
});

$('#ftd-3').hover(function(){
    $(this).find('.ftd-lorem').css('visibility', 'visible');
}, function(){
    $(this).find('.ftd-lorem').css('visibility', 'hidden');
});

$(document).foundation();
