jQuery(function() {
    jQuery('#agentmenuimg').each(function() {
        var agentog = jQuery(this).attr('src');
        jQuery(this).data('agentog', agentog).bind('reset', function() {
            jQuery(this).attr('src',jQuery(this).data('agentog'));
        });
    });
    jQuery('#menu-item-162 a img').each(function() {
        jQuery(this).parent().bind({
            'mouseenter': function() {
                jQuery('#agentmenuimg').attr('src',jQuery(this).children('img').attr('src'));
            },
            'mouseleave': function() {
                jQuery('#agentmenuimg').trigger('reset');
            }
        });
    });
});