(function ($) {
    $(document).ready(function(){
        $('.wfc-cart-wrapper').on('click', function(e){
            $(this).next().removeClass('wfc-hide');
            $(this).next().next().removeClass('wfc-hide');
        });

        $('.wcfc-item-3').on('click', function(e){
            $('.wfc-cart-wrapper').next().addClass('wfc-hide');
            $('.wfc-cart-wrapper').next().next().addClass('wfc-hide');
        });
    });
})(jQuery);
