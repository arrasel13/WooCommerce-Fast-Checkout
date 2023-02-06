(function ($) {
    $(document).ready(function(){
        $('.wfc-cart-wrapper').on('click', function(e){
            $(this).next().removeClass('wfc-hide');
            $(this).next().next().removeClass('wfc-hide');
        });
    });
})(jQuery);
