<div class="wcfc-overlay wfc-hide"></div>
<div class="wcfc-parent-wrapper wfc-hide">
    <?php use WooFastCart\Common\TemplateLoader; ?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath( 'views' )->setFileName( 'cart-header.php', 'cart-header' )->renderTemplate( true );?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath( 'views' )->setFileName( 'cart-products.php', 'cart-products' )->renderTemplate( true, ['cart' => WC()->cart] );?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath( 'views' )->setFileName( 'cart-shipping-info.php', 'cart-shipping-info' )->renderTemplate( true, ['cart' => WC()->cart] );?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath( 'views' )->setFileName( 'cart-footer.php', 'cart-footer' )->renderTemplate( true );?>
</div>