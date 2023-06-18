
<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="m-mv">
        <div class="m-mv__inner">
            <div class="m-mv__heading">
                <h1 class="m-mv__headingText"><?php echo get_the_title();?></h1>
                <h1 class="m-mv__headingSubText">RESTAURANT GUIDE</h1>
            </div><!-- /.m-mv__heading -->

            <div class="m-mv__text">
                <p class="m-mv__textItem">名古屋コーチンの翠翔は、福井県福井市の、</p>
                <p class="m-mv__textItem">駅前と片町に2店舗構えています。</p>
            </div><!-- /.m-mv__text -->

        </div><!-- /.m-mv__inner -->
    </div><!-- /.m-mv -->

    <p class="un-aboutCourse__notion">※価格は全て税込・おひとり様の料金です。※4名様から承ります。</p>

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                <div class="un-aboutCourse">
                    <ul class="un-aboutCourse__list">
                        <li class="un-aboutCourse__item">
                            <div class="un-aboutCourse__heading">
                                <h2 class="un-aboutCourse__headingBody">
                                    <span class="un-aboutCourse__headingMain">華</span>
                                    コース
                                </h2><!-- /.un-aboutCourse__headingBody -->
                                <div class="un-aboutCourse__headingInfo">
                                    <div class="un-aboutCourse__headingCourse">
                                        全
                                        <span class="un-aboutCourse__headingCourseCount">11</span>
                                        品
                                    </div><!-- /.un-aboutCourse__headingCourse -->
                                    <div class="un-aboutCourse__headingPrice">4,200
                                        <span class="un-aboutCourse__headingUnit">円</span>
                                    </div>
                                </div><!-- /.un-aboutCourse__headingInfo -->
                                <img src="<?php echo get_template_directory_uri()?>/course/img/img_index_01.svg" alt="翠翔といえばこれ！野菜と地鶏が鶏出汁でさらにウマく！" class="un-aboutCourse__contentsBubble">

                            </div><!-- /.un-aboutCourse__heading -->

                            <div class="m-mediaLayout un-aboutCourse__layout">
                                <div class="m-mediaLayout__media m-width-44-pc">
                                    <img src="https://placehold.jp/440x300.png" alt="">
                                </div>
                                <div class="m-mediaLayout__contents">

                                <p class="m-mediaLayout__text">
                                    名古屋コーチンをとことん味わっていただけるコースをご用意しました！<br>
                                    ジャガイモパリパリサラダをはじめ、蒸し鶏冷菜、コーチン焼き鳥、コーチンだしまき玉子、名物手羽先、チキン南蛮、鍋、そしてデザートまで堪能できる豪華な内容です。<br>
                                    忘年会・新年会・歓迎会・送迎会など各種ご宴会におすすめ。
                                </p><!-- /.m-mediaLayout__text -->

                                <div class="m-box m-box--narrow">
                                    <div class="m-box__inner">
                                        <ul class="m-list col-02">
                                            <li class="m-list__item">テキスト</li>
                                            <li class="m-list__item">テキスト</li>
                                            <li class="m-list__item">テキスト</li>
                                            <li class="m-list__item">テキスト</li>
                                            <li class="m-list__item">テキスト</li>
                                        </ul>
                                    </div><!-- /.m-box__inner -->
                                </div><!-- /.m-box -->
                                </div><!-- /.m-mediaLayout__contents -->
                            </div><!-- /.m-mediaLayout -->
                        </li>
                    </ul><!-- /.aboutCourse__list -->
                </div><!-- /.un-aboutCourse -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                <h2 class="m-heading-type2">飲み放題</h2>

                <div class="un-aboutCourse__text">
                    <p class="un-aboutCourse__textItem">コースにつけられる飲み放題は下記の価格です。</p>
                    <p class="un-aboutCourse__textItem">アルコールの飲み放題を頼まれるお客様は、人数分アルコール飲み放題をお選びください。</p>
                </div><!-- /.un-aboutCourse__text -->

                <ul class="un-aboutCourse__plan">
                    <li class="un-aboutCourse__planItem">
                        <img src="<?php echo get_template_directory_uri()?>/course/img/img_index_02.svg" alt="乾杯1杯分だけ生ビールOK 飲み放題 2h + 1,500円">
                    </li>

                    <li class="un-aboutCourse__planItem">
                        <img src="<?php echo get_template_directory_uri()?>/course/img/img_index_03.svg" alt="ずっと生ビールOK! 飲み放題 2h + 1,800円">
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- /.l-content -->

    <?php get_template_part('./templates/template-breadcrumb'); ?>

    <?php get_template_part('./templates/template-contact'); ?>
</main>

<!-- フッター -->
<?php get_footer(); ?>
