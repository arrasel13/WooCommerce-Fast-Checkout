<?php
    use WooFastCart\Common\TemplateLoader;

    WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-icon.php', 'cart-icon')->renderTemplate(true); 
    WCFC()->container[TemplateLoader::class]->setAbsolutePath('views')->setFileName('cart-body.php', 'cart-body')->renderTemplate(true); 
?>


