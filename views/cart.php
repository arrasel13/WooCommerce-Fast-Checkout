<?php
    use WooFastCart\Common\TemplateLoader;
    
    WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-icon.php', 'cart-icon')->renderTemplate(true); 

?>

<div class="wcfc-overlay wfc-hide"></div>
<div class="wcfc-parent-wrapper wfc-hide">
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-header.php', 'cart-header')->renderTemplate(true); ?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-body.php', 'cart-body')->renderTemplate(true); ?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-shipping-info.php', 'cart-shipping-info')->renderTemplate(true); ?>
    <?php WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-footer.php', 'cart-footer')->renderTemplate(true); ?>
</div>
