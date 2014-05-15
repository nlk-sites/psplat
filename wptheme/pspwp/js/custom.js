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


    if ( $('.bxslider').length ) {
        jQuery('.bxslider').bxSlider({
            minSlides: 2,
            maxSlides: 2,
            slideWidth: 420,
            slideHeight: 130,
            slideMargin: 30,
            pager: false
        });
    }


});




jQuery(function($){
    $('ol.dsidx-results li.dsidx-prop-summary').hide().filter(':lt(2)').show();

    $('.dsidx-move-down').click(function(){
        var $this = $(this),
            these = $(this).siblings('.textwidget').find('li:visible').filter(':lt(2)'),
            those = these.last().nextAll(':lt(2)');
        if ( these.last().next('li').length ) {
            these.hide('slow', function(){
                those.show('slow');
            });
        }
        else {
            these.hide('slow', function(){
                $this.siblings('.textwidget').find('li').slice(2).show('slow')
            });
        }
    });
    $('.dsidx-move-up').click(function(){
        var $this = $(this),
            these = $(this).siblings('.textwidget').find('li:visible').filter(':lt(2)'),
            those = these.first().prevAll(':lt(2)');
        if ( these.first().prev('li').length ) {
            these.hide('slow', function(){
                those.show('slow');
            });
        }
        else {
            these.hide('slow', function(){
                $this.siblings('.textwidget').find('li').slice(-2).show('slow')
            });
        }
    });
});