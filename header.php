<?php
wp_head();
?>
<html>
    <head>
        <title> <?php bloginfo( 'name' ); ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body <?php body_class();?> >
        <nav>
            <figure>
                <img src="<?php echo get_template_directory_uri().'/assets/images/logo.png' ?>">
            </figure>
            <div class="logo-text">
                <p>Lasles<span style="font-weight:bold">VPN</span></p>
            </div>
            <div class="links">
                <div>
                    features
                </div>
                <div>
                    Pricing
                </div>
                <div>
                    testimonial
                </div>
                <div>
                    help
                </div>
            </div>
            <div class="sign">
                <div>
                    <nobr>Sign in</nobr>
                </div>
                <div class="button">
                    <nobr>Sign Up</nobr>
                </div>
            </div>
            <div class="drop">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
        <main>