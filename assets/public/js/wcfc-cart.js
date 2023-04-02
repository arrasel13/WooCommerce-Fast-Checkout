(function ($) {
    $(document).ready(function(){
        $('.wfc-cart-wrapper').on('click', function(e){
            $(this).next().addClass('wfc-show').fadeIn(90, 'linear');
            $(this).next().next().addClass('wfc-show').fadeIn(90, 'linear');
            $(this).next().removeClass('wfc-hide');
            $(this).next().next().removeClass('wfc-hide');
        });

        $('.wcfc-item-3').on('click', function(e){
            $('.wfc-cart-wrapper').next().removeClass('wfc-show');
            $('.wfc-cart-wrapper').next().next().removeClass('wfc-show');
            $('.wfc-cart-wrapper').next().fadeOut(90, 'linear');
            $('.wfc-cart-wrapper').next().next().fadeOut(90, 'linear');
            $('.wfc-cart-wrapper').next().addClass('wfc-hide');
            $('.wfc-cart-wrapper').next().next().addClass('wfc-hide');
        });
    });
})(jQuery);
