<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imray Digital</title>
</head>
<body>

   <div class="header pb30">
        <div class="header__top">
        <ul class="header__socials">
                <li><a href="https://facebook.com/imraydigital" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
                <li><i class="fa-brands fa-linkedin-in"></i></li>
                <li><i class="fa-brands fa-github"></i></li>
            </ul>
            <!--
            <p><i class="fa-solid fa-magnifying-glass"></i></p>
            <p><i class="fa-solid fa-user"></i></p>
            -->
        </div>
        <nav>
            <ul class="header__items">
               <?php
                    wp_nav_menu(array(
                        'theme_location' => 'mainNavLocation'
                    ))
               ?>
            </ul>
        </nav>
</div>