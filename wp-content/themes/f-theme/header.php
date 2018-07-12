<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
    <head>
        <?php
        if (!WP_IP_DEV_ENV){
            ?>
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-WX8QR66');</script>
            <!-- End Google Tag Manager -->
            <?php
        }
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>
            <?php wp_title(); ?>
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        <?php wp_head(); ?>
    </head>
<body>
<?php
if (!WP_IP_DEV_ENV){
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WX8QR66"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php
}
?>
<header>
    <div>header here</div>
    <div class="language_switcher">
        <ul><?php pll_the_languages();?></ul>
    </div>
</header>
<div class="main">