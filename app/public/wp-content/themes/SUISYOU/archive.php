<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="m-mv">
        <div class="m-mv__inner">
            <div class="m-mv__heading">
                <h1 class="m-mv__headingText"><?php echo get_the_archive_title();?></h1>
                <span class="m-mv__headingSubText">RESTAURANT GUIDE</span>
            </div><!-- /.m-mv__heading -->

            <div class="m-mv__text">
                <p class="m-mv__textItem">名古屋コーチンの翠翔から、新メニューやお得なキャンペーンのお知らせです♪</p>
            </div><!-- /.m-mv__text -->

            <div class="un-news">
                <ul class="un-news__list">
                    <li class="un-news__item">
                        <a href="__dummy__" class="un-news__link">
                            <div class="un-news__contents">
                                <div class="un-news__media">

                                </div>
                                <!-- /.un-news__media -->
                                <picture class="un-news__media">
                                    <source srcset="<?php echo get_template_directory_uri()?>/common/img/img_common_01.webp" type="image/webp">
                                    <img src="<?php echo get_template_directory_uri()?>/common/img/img_common_01.png" alt="">
                                </picture>
                                
                                <div class="un-news__body">
                                    <time class="un-news__time" datetime="2023-07-10">23/7/10</time>
                                    <p class="un-news__title"><b>翠翔駅前店にて、アルバイト・パートを募集します。</b></p>
                                </div><!-- /.un-news__body -->
                            </div><!-- /.un-news__contents -->
                        </a>
                    </li>
                </ul>
            </div><!-- /.un-news -->

        </div><!-- /.m-mv__inner -->
    </div><!-- /.m-mv -->

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                
            </div>
        </div>
    </div><!-- /.l-content -->

    <!-- パンくず -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <!-- Breadcrumb NavXT 7.2.0 -->
        <span property="itemListElement" typeof="ListItem">
            <a property="item" typeof="WebPage" title="Go to koiki_suisyou." href="<?php echo home_url('/')?>" class="home">
                <span property="name">TOP</span>
            </a>
            <meta property="position" content="1">
        </span>
        <span class="m-breadcrumb__arrow"></span>
        <span property="itemListElement" typeof="ListItem">
            <span property="name" class="post post-page current-item">お知らせ</span>
            <meta property="url" content="<?php echo home_url('/news')?>">
            <meta property="position" content="2">
        </span>
    </div>

    <?php get_template_part('./templates/template-contact'); ?>    
</main>

<!-- フッター -->
<?php get_footer(); ?>
