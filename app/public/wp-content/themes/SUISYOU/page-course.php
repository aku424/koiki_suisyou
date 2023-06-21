
<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>

<?php get_template_part('./templates/template-mv'); ?>

    <p class="un-aboutCourse__notion">※価格は全て税込・おひとり様の料金です。※4名様から承ります。</p>

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                <div class="un-aboutCourse">
                    <!-- コースがあったら表示 -->
                    <?php
                        $args = array(
                            'post_type' => 'meel_course'
                        );

                        $query = new WP_Query($args);
                        if ( $query->have_posts() ) :
                    ?>
                    <ul class="un-aboutCourse__list">
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <li class="un-aboutCourse__item">
                            <div class="un-aboutCourse__heading">
                                <h2 class="un-aboutCourse__headingBody">
                                    <span class="un-aboutCourse__headingMain"><?php the_title(); ?></span>
                                    コース
                                </h2><!-- /.un-aboutCourse__headingBody -->
                                <div class="un-aboutCourse__headingInfo">
                                    <div class="un-aboutCourse__headingCourse">
                                        全
                                        <span class="un-aboutCourse__headingCourseCount"><?php the_field('count'); ?></span>
                                        品
                                    </div><!-- /.un-aboutCourse__headingCourse -->
                                    <div class="un-aboutCourse__headingPrice"><?php the_field('price'); ?>
                                        <span class="un-aboutCourse__headingUnit">円</span>
                                    </div>
                                </div><!-- /.un-aboutCourse__headingInfo -->
                                <?php
                                    $item = get_field('speech_bubble');
                                    if ($item): ?>
                                    <img src="<?php the_field('speech_bubble'); ?>" alt="" class="un-aboutCourse__contentsBubble">
                                <?php endif; ?>
                            </div><!-- /.un-aboutCourse__heading -->

                            <div class="m-mediaLayout un-aboutCourse__layout">
                                <div class="m-mediaLayout__media m-width-44-pc">
                                    <img src="<?php the_field('image'); ?>" alt="">
                                </div>
                                <div class="m-mediaLayout__contents">

                                <p class="m-mediaLayout__text"><?php the_field('description'); ?></p>
                                <!-- /.m-mediaLayout__text -->

                                <div class="m-box m-box--narrow">
                                    <div class="m-box__inner">
                                    <?php the_field('コースのお品書き')?>
                                        <!-- <ul class="m-list col-02">
                                            <li class="m-list__item">テキスト</li>
                                        </ul> -->
                                    </div><!-- /.m-box__inner -->
                                </div><!-- /.m-box -->
                                </div><!-- /.m-mediaLayout__contents -->
                            </div><!-- /.m-mediaLayout -->
                        </li>
                        <?php endwhile; ?>
                    </ul><!-- /.aboutCourse__list -->
                    <?php endif;?>
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

                <div class="m-box">
                    <h3 class="m-box__heading">ALCOHOL</h3>
                    <div class="m-box__inner">
                        <!-- /.m-box__heading -->

                        <p class="m-box__text">生ビール（+1,500円コースは乾杯一杯のみお選びいただけます）</p>

                        <ul class="un-menu-drink__layout un-menu-drink__layout--type04">
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--08">
                                <div class="un-menu-drink__layoutHeading"><b>ビール</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">キリンラガー中瓶</li>
                                    <li class="m-list__item">ノンアルコールビール</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--09">
                                <div class="un-menu-drink__layoutHeading"><b>ハイボール</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">ハイボール</li>
                                    <li class="m-list__item">ジンジャーハイボール</li>
                                    <li class="m-list__item">コークハイボール</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--10">
                                <div class="un-menu-drink__layoutHeading"><b>ワイン</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">ワイン フランジア 赤</li>
                                    <li class="m-list__item">ワイン フランジア 白</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--11">
                                <div class="un-menu-drink__layoutHeading"><b>カクテル</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">カシスソーダ</li>
                                    <li class="m-list__item">カシスオレンジ</li>
                                    <li class="m-list__item">カシスグレープ</li>
                                    <li class="m-list__item">ジントニック</li>
                                    <li class="m-list__item">ジンバック</li>
                                    <li class="m-list__item">シャンディーガフ</li>
                                    <li class="m-list__item">ピーチソーダ</li>
                                    <li class="m-list__item">ピーチオレンジ</li>
                                    <li class="m-list__item">ピーチグレープ</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--12">
                                <div class="un-menu-drink__layoutHeading"><b>酎ハイ</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">生搾りレモン酎ハイ</li>
                                    <li class="m-list__item">生搾りライム酎ハイ</li>
                                    <li class="m-list__item">沖縄フルーツミックス酎ハイ</li>
                                    <li class="m-list__item">熊本デコポン酎ハイ</li>
                                    <li class="m-list__item">博多あまおう酎ハイ</li>
                                    <li class="m-list__item">カルピス酎ハイ</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--13">
                                <div class="un-menu-drink__layoutHeading"><b>焼酎</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">芋焼酎 ヤマネコ</li>
                                    <li class="m-list__item">芋焼酎 富乃宝山</li>
                                    <li class="m-list__item">麦焼酎 中々</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem un-menu-drink__layoutItem--14">
                                <div class="un-menu-drink__layoutHeading"><b>果実酒</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">あっさり秘蔵梅酒</li>
                                    <li class="m-list__item">濃厚ゆず酒</li>
                                    <li class="m-list__item">もも&さくらんぼ酒</li>
                                    <li class="m-list__item">山形りんご酒</li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.m-list-columns -->
                    </div><!-- /.m-box__inner -->
                </div><!-- /.m-box -->

                <div class="m-box">
                    <h3 class="m-box__heading">NON ALCOHOL</h3>
                    <div class="m-box__inner">
                        <!-- /.m-box__heading -->
                        <ul class="un-menu-drink__layout un-menu-drink__layout--type03">
                            <li class="un-menu-drink__layoutItem">
                                <div class="un-menu-drink__layoutHeading"><b>ノンアルコールビール</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">ドライゼロ ノンアルビール</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem">
                                <div class="un-menu-drink__layoutHeading"><b>果肉入りジュース</b></div>
                                <ul class="un-menu-drink__layoutList m-list">
                                    <li class="m-list__item">国産100%ももジュース</li>
                                    <li class="m-list__item">国産100%洋梨ジュース</li>
                                    <li class="m-list__item">濃厚マンゴージュース</li>
                                </ul>
                            </li>
                            <li class="un-menu-drink__layoutItem">
                                <div class="un-menu-drink__layoutHeading"><b>ソフトドリンク</b></div>
                                <div class="un-menu-drink__layoutListWrap">
                                    <ul class="un-menu-drink__layoutList m-list">
                                        <li class="m-list__item">池田のサイダー</li>
                                        <li class="m-list__item">ローヤル・さわやか</li>
                                        <li class="m-list__item">コカ・コーラ</li>
                                        <li class="m-list__item">ジンジャーエール</li>
                                    </ul>
    
                                    <ul class="un-menu-drink__layoutList m-list">
                                        <li class="m-list__item">オレンジ</li>
                                        <li class="m-list__item">グレープフルーツ</li>
                                        <li class="m-list__item">黒烏龍茶</li>
                                        <li class="m-list__item">緑茶</li>
                                    </ul>
                                </div><!-- /.un-menu-drink__layoutList -->
                            </li>
                        </ul>
                        <!-- /.m-list-columns -->
                    </div><!-- /.m-box__inner -->
                </div><!-- /.m-box -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <?php get_template_part('./templates/template-breadcrumb'); ?>

    <?php get_template_part('./templates/template-contact'); ?>
</main>

<!-- フッター -->
<?php get_footer(); ?>
