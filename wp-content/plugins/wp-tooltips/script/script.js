/* 
 * @author Smartcat
 * script that runs the tooltips
 */
jQuery(document).ready(function($) {
    var ctr = 0;
    $('.sc-tooltip').each(function() {
        
        ctr++;
        var tooltips = '<div id="sc-tooltip' + ctr + '-box" class="sc-tooltip-wrapper"><img src="' + $(this).attr('data-image') + '"/><span>' + $(this).attr('data-desc') + '</span></div>';
        $('body').append(tooltips);
        $(this).attr('id', 'sc-tooltip' + ctr);
    });
    $('.sc-tooltip').hover(function(e) {
        var x = e.pageX;
        var y = e.pageY;
        var theId = '#' + $(this).attr('id') + '-box';
        var leftOfset = $(theId).width();
        $(theId).css({'left': x, 'top': y});
        $(theId).fadeIn(200);
    }, function() {
        var theId = '#' + $(this).attr('id') + '-box';
        $(theId).fadeOut(100);
    });
});

