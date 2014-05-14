(function($) {

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
    $('#quicksearch_minprice_list').find('option:first-child').text('No Min');
    $('#quicksearch_maxprice_list').find('option:first-child').text('No Max');

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
    })



    // form auto-filler
    var proptype = $.urlParam['idx-q-PropertyTypes'];
    var city = $('input#idx-q-Cities.sbr-srch').val();
    var zip = $.urlParam['idx-q-ZipCodes'];
    var pricemin = $.urlParam['idx-q-PriceMin'];
    var pricemax = $.urlParam['idx-q-PriceMax'];
    var sqft = $.urlParam['idx-q-ImprovedSqFtMin'];
    var bedsmin = $.urlParam['idx-q-BedsMin'];
    var bathsmin = $.urlParam['idx-q-BathsMin'];

    $('.dsidx-search-widget-propertyTypes option[value="' + proptype + '"]').attr('selected', 'selected');
    $('#idx-q-Cities option[value="' + city + '"]').attr('selected', 'selected');
    $('#idx-q-ZipCodes option[value="' + zip + '"]').attr('selected', 'selected');
    $('#idx-q-PriceMin.dsidx-price').val(pricemin);
    $('#idx-q-PriceMax.dsidx-price').val(pricemax);
    $('#idx-q-ImprovedSqFtMin.dsidx-improvedsqft').val(sqft);
    $('#idx-q-BedsMin.dsidx-beds').val(bedsmin);
    $('#idx-q-BathsMin.dsidx-baths').val(bathsmin);

    // advanced search format fix
    var url = window.location.pathname;
    url = url.split("/");
    var part = url[3];
    if ( part == 'advanced' ) {
        $('div.left_main_accnt').css("width", "918px");
    }


}(jQuery));

/*
jQuery(document).ready(function() {
    jQuery(".showvideopopup").fancybox({
        fitToView   : true,
        autoSize    : true,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });
    
    jQuery("a.fancybox").fancybox(
        {
             nextEffect : 'fade',
             prevEffect : 'fade',
             type: 'image',
             arrows : true,
             loop : true,
        }
    );

});
*/

jQuery(function() {     
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