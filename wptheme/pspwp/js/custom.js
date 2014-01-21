//idx search widget multi search box
jQuery(function($) {
    $('#idx-q-Cities').bind("blur keyup", function(){
        var theVal = $(this).val(),
            filterZip = new RegExp("^[0-9]{5}([-][0-9]{4})?$"),
            filterCity = new RegExp("^[a-zA-Z]+"),
            filterAddress = new RegExp("[0-9]{1,7}[\\s+]([a-zA-Z]+)"),
            filterMls = new RegExp("^[0-9]{6,}");

        if ( filterZip.test(theVal) ) {
            $(this).attr('name', 'idx-q-ZipCodes').removeClass('ui-autocomplete-input');
        }
        else if ( filterCity.test(theVal) ) {
            $(this).attr('name', 'idx-q-Cities').addClass('ui-autocomplete-input');
        }
        else if ( filterAddress.test(theVal) ) {
            $(this).attr('name', 'idx-q-AddressMasks').removeClass('ui-autocomplete-input');
        }
        else if ( filterMls.test(theVal) ) {
            $(this).attr('name', 'idx-q-MlsNumbers').removeClass('ui-autocomplete-input');
            $('#idx-q-PropertyTypes').val('');
            $('#idx-q-PriceMin').val('');
            $('#idx-q-PriceMax').val('');
            $('#idx-q-BedsMin').val('');
            $('#idx-q-BedsMax').val('');
            $('#idx-q-BathsMin').val('');
            $('#idx-q-BathsMax').val('');
        }
        else {
            $(this).attr('name', 'idx-q-Cities').addClass('ui-autocomplete-input');
        }
    });
    $('#idx-search-form').submit( function() {
        var addyVal = $('input[name="idx-q-AddressMasks"]').val();
        $('input[name="idx-q-AddressMasks"]').val( '%' + addyVal + '%' );
        return true;
    }); 
});

// Set right side-bar no smaller than left content
jQuery(function($) {
    var h = $('.left_main_accnt').height();
    $('.right_bar').css('min-height', h);
});

// contact form pop-up
jQuery(function($) {
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
});

