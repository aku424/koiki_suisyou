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
<header class="m-header js-header">
    <div class="m-header__inner">
        <div class="m-header__layout">
            <div class="m-header__logo">
                <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_08.svg" alt="翠翔">
            </div><!-- /.m-header__logo -->
            <div class="m-header__main">
                <button class="m-header__button js-header__hook" type="button">
                    <span class="m-header__buttonText">MENU</span>
                </button>
                <div class="m-header__contents js-header__navContents">
                    <div class="m-header__contentsInner">
                        <div class="m-header__media">
                            <img src="<?php echo get_template_directory_uri()?>/img/img_index_23.png" alt="">
                        </div><!-- /.m-header__media -->
                        <div class="m-header__info">
                            <div class="m-header__infoInner">
                                <div class="m-header__infoLogo">
                                    <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_08.svg" alt="翠翔">
                                </div><!-- /.m-header__infoLogo -->
                                <ul class="m-header__list">
                                    <li class="m-header__link">
                                        <a href="__dummy__">
                                            <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_12.svg" alt="Instagram">
                                        </a>
                                    </li>

                                    <li class="m-header__link">
                                        <a href="__dummy__">
                                            <img src="<?php echo get_template_directory_uri()?>/common/img/icon_common_03.svg" alt="LINE">
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- /.m-header__infoInner -->
                            <nav class="m-header__nav">
                                <ul class="m-header__navList">
                                    <div class="m-header__navRight">
                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">メニュー一覧</span>
                                                <span class="m-header__navSubText">MENU</span>
                                            </a>
                                        </li>
                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">コースについて</span>
                                                <span class="m-header__navSubText">CORSE</span>
                                            </a>
                                        </li>
                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">店舗案内</span>
                                                <span class="m-header__navSubText">SHOP</span>
                                            </a>
                                        </li>

                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">お知らせ</span>
                                                <span class="m-header__navSubText">NEWS</span>
                                            </a>
                                        </li>
                                    </div><!-- /.m-header__navRight -->

                                    <div class="m-header__navLeft">
                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">お問い合わせ</span>
                                                <span class="m-header__navSubText">CONTACT</span>
                                            </a>
                                        </li>
                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">ONLINE SHOP
                                                    <img class="m-newWindowIcon" src="<?php echo get_template_directory_uri()?>/common/img/icon_common_11.svg" alt="別窓ウィンドウで開く">
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-header__navItem">
                                            <a href="" class="m-header__navLink">
                                                <span class="m-header__navText">TAKEOUT弁当
                                                    <img class="m-newWindowIcon" src="<?php echo get_template_directory_uri()?>/common/img/icon_common_11.svg" alt="別窓ウィンドウで開く">
                                                </span>
                                            </a>
                                        </li>
                                    </div><!-- /.m-header__navLeft -->
                                </ul>
                            </nav>
                        </div><!-- /.m-header__info -->
                    </div><!-- /.m-header__contentsInner -->
                </div><!-- /.m-header__contents -->
            </div><!-- /.m-header__main -->
        </div><!-- /.m-header__layout -->
    </div>
    <!-- /.m-header__inner -->
</header>
<!-- /.header -->