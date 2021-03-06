jQuery(function($) {

    // show front slider once dom loaded
    $('#tab-slides').css('visibility', 'visible');


    // get URL params
    $.urlParam = (function (a) {
        var i,
            p,
            b = {};
        if (a === "") { return {}; }
        for (i = 0; i < a.length; i += 1) {
            p = a[i].split('=');
            if (p.length === 2) {
                b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
            }
        }
        return b;
    }(window.location.search.substr(1).split('&')));

    // new IDX omnibox fix
    $('#quicksearch_minprice_list').find('option[value="0"]').text('No Min');
    $('#quicksearch_maxprice_list').find('option[value="0"]').text('No Max');

    // Set right side-bar no smaller than left content
    var h = $('.left_main_accnt').height();
    $('.right_bar').css('min-height', h);


    // contact form pop-up
    $('a.open-pop-up').each( function() {
        $(this).click( function() {
            $('body').append('<div id="pop-overlay" style="position:fixed;width:100%;height:100%;top:0;left:0;background-color:rgba(0,0,0,.5);z-index:99;"></div>');
            $('#contact .pop-up').show();
        });
    });
    $('.close-pop-up').click(function(){
        $(this).closest('#contact .pop-up').hide();
        $('#pop-overlay').remove();
    });


    jQuery('#agentmenuimg, #comenuimg').each(function() {
        var agentog = jQuery(this).attr('src');
        jQuery(this).data('agentog', agentog).bind('reset', function() {
            jQuery(this).attr('src',jQuery(this).data('agentog'));
        });
    });
    jQuery('#menu-item-162 a img').each(function() {
        //console.log('js for '+ jQuery(this).attr('src'));
        jQuery(this).parent().bind({
            'mouseover': function() {
                jQuery('#agentmenuimg').attr('src',jQuery(this).children('img').attr('src'));
            },
            'mouseout': function() {
                jQuery('#agentmenuimg').trigger('reset');
            }
        });
    });
    jQuery('#menu-item-161 a img').each(function() {
        //console.log('js for '+ jQuery(this).attr('src'));
        jQuery(this).parent().bind({
            'mouseover': function() {
                jQuery('#comenuimg').attr('src',jQuery(this).children('img').attr('src'));
            },
            'mouseout': function() {
                jQuery('#comenuimg').trigger('reset');
            }
        });
    });


});




/* tabbed listings/slider functionality */
jQuery(function($){
    // hide results, then re-show the first two, for each tab
    $('.home ol.dsidx-results').each(function() {
         $(this).children('li').filter(':lt(2)').fadeIn(250);
    });

    $('.dsidx-move-down').click(function(){
        var these = $(this).siblings('div').find('li:visible'),
            those = these.last().nextAll(':lt(2)');
        // if more results follow currently displayed...
        if ( those.length ) {
            // hide these
            these.fadeOut(150, function(){
                // and show the next two
                those.fadeIn(250);
            });
        }
        // otherwise...
        else {
            return false; // do nothing more
        }
    });
    $('.dsidx-move-up').click(function(){
        var these = $(this).siblings('div').find('li:visible'),
            those = these.first().prevAll(':lt(2)');
        // if more results precede currently displayed...
        if ( those.length ) {
            // hide these
            these.fadeOut(150, function(){
                // and show previous two
                those.fadeIn(250);
            });
        }
        // otherwise...
        else {
            return false; // do nothing more
        }
    });
});