<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>翠翔</title>

    <!-- style -->
    <?php wp_head(); ?>
</head>
<body>
<header class="l-header js-header">
    <div class="l-header__inner">
        <div class="l-header__layout">
            <div class="l-header__logo">
                <a href="<?php echo home_url('');?>" class="l-header__logoLink">
                    <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_08.svg" alt="翠翔">
                </a>
            </div><!-- /.l-header__logo -->
            <div class="l-header__main">
                <button class="l-header__button js-header__hook" type="button">
                    <span class="l-header__buttonText">MENU</span>
                </button>
                <div class="l-header__contents js-header__navContents">
                    <div class="l-header__contentsInner">
                        <div class="l-header__media">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_index_23.png" alt="">
                        </div><!-- /.l-header__media -->
                        <div class="l-header__info">
                            <div class="l-header__infoInner">
                                <div class="l-header__infoLogo">
                                    <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_08.svg" alt="翠翔">
                                </div><!-- /.l-header__infoLogo -->
                                <ul class="l-header__list">
                                    <li class="l-header__link">
                                        <a href="__dummy__">
                                            <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_12.svg" alt="Instagram">
                                        </a>
                                    </li>

                                    <li class="l-header__link">
                                        <a href="__dummy__">
                                            <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_03.svg" alt="LINE">
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.l-header__infoInner -->
                            <nav class="l-header__nav">
                                <ul class="l-header__navList">
                                    <div class="l-header__navRight">
                                        <li class="l-header__navItem">
                                            <a href="<?php echo home_url('/menu'); ?>" class="l-header__navLink">
                                                <span class="l-header__navText">メニュー一覧</span>
                                                <span class="l-header__navSubText">MENU</span>
                                            </a>
                                        </li>
                                        <li class="l-header__navItem">
                                            <a href="<?php echo home_url('/shop-information'); ?>" class="l-header__navLink">
                                                <span class="l-header__navText">コースについて</span>
                                                <span class="l-header__navSubText">CORSE</span>
                                            </a>
                                        </li>
                                        <li class="l-header__navItem">
                                        <a href="<?php echo home_url('/shop-information'); ?>" class="l-header__navLink">
                                                <span class="l-header__navText">店舗案内</span>
                                                <span class="l-header__navSubText">SHOP</span>
                                            </a>
                                        </li>

                                        <li class="l-header__navItem">
                                            <a href="" class="l-header__navLink">
                                                <span class="l-header__navText">お知らせ</span>
                                                <span class="l-header__navSubText">NEWS</span>
                                            </a>
                                        </li>
                                    </div><!-- /.l-header__navRight -->

                                    <div class="l-header__navLeft">
                                        <li class="l-header__navItem">
                                            <a href="" class="l-header__navLink">
                                                <span class="l-header__navText">お問い合わせ</span>
                                                <span class="l-header__navSubText">CONTACT</span>
                                            </a>
                                        </li>
                                        <li class="l-header__navItem">
                                            <a href="" class="l-header__navLink">
                                                <span class="l-header__navText">ONLINE SHOP
                                                    <img class="m-newWindowIcon" src="<?php echo get_template_directory_uri()?>/common/img/icon_common_11.svg" alt="別窓ウィンドウで開く">
                                                </span>
                                            </a>
                                        </li>
                                        <li class="l-header__navItem">
                                            <a href="" class="l-header__navLink">
                                                <span class="l-header__navText">TAKEOUT弁当
                                                    <img class="m-newWindowIcon" src="<?php echo get_template_directory_uri()?>/common/img/icon_common_11.svg" alt="別窓ウィンドウで開く">
                                                </span>
                                            </a>
                                        </li>
                                    </div><!-- /.l-header__navLeft -->
                                </ul>
                            </nav>
                        </div><!-- /.l-header__info -->
                    </div><!-- /.l-header__contentsInner -->
                </div><!-- /.l-header__contents -->
            </div><!-- /.l-header__main -->
        </div><!-- /.l-header__layout -->
    </div>
    <!-- /.l-header__inner -->
</header>
<!-- /.header -->