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

$('.top-bar').on('sticky.zf.stuckto:top', function(){
    $(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function(){
    $(this).removeClass('shrink');
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
