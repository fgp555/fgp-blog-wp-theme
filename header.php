<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <base href="<?php echo get_theme_file_uri() . '/';  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="https://fgp.one/fb-cover.webp" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="314" />
    <title>Frank GP 🧑‍💻 Web Architect</title>
    <meta name="description" content="Research, Design Development Web" />

    <meta name="theme-color" content="#347" />
    <meta name="author" content="Frank GP" />
    <meta name="site_locale" content="en_PE" />
    <meta name="robots" content="index" />
    <meta property="fb:app_id" content="1526445401046904" />
    <meta property="og:locale" content="es_PE" />
    <meta property="og:type" content="Website" />
    <meta property="og:site_name" content="Frank GP®" />
    <meta property="og:url" content="https://frankgp.com/" />
    <link rel="icon" href="https://fgp.one/favicon.webp" sizes="256x256" />
    <link rel="apple-touch-icon" href="https://fgp.one/favicon.webp" />


    <link rel="stylesheet" href="https://fgp.one/fa4.css?2022.9.12" />
    <link rel="stylesheet" href="style.css?2022.9.12" />
    <link rel="stylesheet" href="colors.css?2022.9.12" />
    <link rel="stylesheet" href="grid.css?2022.9.12" />
    <link rel="stylesheet" href="btn.css?2022.9.12" />
    <link rel="stylesheet" href="header.css?2022.9.12" />
    <link rel="stylesheet" href="main.css?2022.9.12" />
    <link rel="stylesheet" href="aside.css?2022.9.12" />
    <link rel="stylesheet" href="nav-pag.css?2022.9.12" />
    <link rel="stylesheet" href="footer.css?2022.9.12" />
    <link rel="stylesheet" href="wp.css?2022.9.12" />
    <script src="script.js?2022.9.12" defer></script>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <section class="topbar">
            <a href="https://github.com/fgp555/fgp-blog-wp-theme" style="text-decoration: none;" target="_blank">
                <p>FGP Blog WP Theme — version 2022.9.12</p>
            </a>
        </section>
        <section class="navbar">
            <h2><a href="/">Frank GP</a></h2>
            <nav>
                <ul>
                    <li><a href="/">Blog</a></li>
                    <!-- <li><a href="/services">Servicios</a></li> -->
                </ul>
                <a href="javascript:void(0)" class="nav_btn"><i class="fa fa-bars"></i></a>
            </nav>
        </section>
        <section class="hero" style="background-image: url('<?php if (has_post_thumbnail()) {
                                                                the_post_thumbnail_url();
                                                            } else {
                                                                echo get_post_meta($post->ID, 'custom_feature_img', true);
                                                            }  ?>');">
            <h2>Frank GP — Web Architec</h2>
            <p>Documentacion para programacion web</p>
            <form action="<?php echo esc_url(home_url()); ?>" method="get">
                <input type="text" placeholder="Que quieres Buscar" name="s">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <hr>
        </section>
    </header>