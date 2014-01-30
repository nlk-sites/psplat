(function($) {

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




    //idx search widget multi search box
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
        
        //$('input[name="idx-q-search-for"]').attr( 'value', theVal );
    });
    $('#idx-search-form').submit( function() {
        var addyVal = $('input[name="idx-q-AddressMasks"]').val();
        $('input[name="idx-q-AddressMasks"]').val( '%' + addyVal + '%' );
        return true;
    }); 



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