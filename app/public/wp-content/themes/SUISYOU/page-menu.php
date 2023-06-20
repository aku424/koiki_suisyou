<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>

<?php get_template_part('./templates/template-mv'); ?>

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">

                <h2 class="m-heading-type2">GRAND MENU</h2>

                <div class="un-menuIndex">
                    <!-- グランドメニューのお気に入りになってるコンテンツ表示 -->
                    <?php
                        $args = array(
                            'post_type' => 'grand_menu'
                        );

                        $query = new WP_Query($args);
                        if ( $query->have_posts() ) :
                    ?>
                    <ul class="un-menuIndex__layout col-02">
                        <?php while ( $query->have_posts() ) : $query->the_post();
                        if(get_field('favorite')): 
                        ?>

                        <li class="un-menuIndex__item m-menu--large">
                            <?php get_template_part('./templates/template-menu'); ?>
                        </li>
                        <?php 
                        endif; 
                        endwhile; ?>
                    </ul><!-- /.un-menuIndex__layout -->

                    <?php endif; 
                    if ( $query->have_posts() ) :?>
                    <div class="js-viewMore">
                        <ul class="un-menuIndex__layout col-03">
                        <?php 
                            while ( $query->have_posts() ) : $query->the_post();
                            if(!get_field('favorite')): 
                        ?>
                            <li class="un-menuIndex__item js-viewMore__item">
                            <?php get_template_part('./templates/template-menu'); ?>
                            </li>
                        <?php 
                            endif; 
                            endwhile;
                        ?>
                        </ul><!-- /.un-menuIndex__layout -->
                        <template class="js-viewMore__template">
                            <div class="m-button m-button--nonMark m-button--narrow un-menuIndex__button">
                                <a href="" class="m-button__link js-viewMore__hook">
                                    <div class="m-button__inner">
                                        <span class="m-button__text">MORE</span>
                                    </div> 
                                </a>
                            </div><!-- /.m-button -->
                        </template>
                    </div><!-- /.js-viewMore -->
                    <?php endif; 
                    wp_reset_query(); ?>
                </div><!-- /.un-menuIndex -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                
                <h2 class="m-heading-type2">DLINK MENU</h2>

                <div class="m-box">
                    <h3 class="m-box__heading">ALCOHOL</h3>
                    <div class="m-box__inner">
                        <!-- /.m-box__heading -->

                        <div class="m-mediaLayout">
                            <picture class="m-mediaLayout__media m-width-37-pc">
                                <source srcset="<?php echo get_template_directory_uri()?>/menu/img/img_index_01.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri()?>/menu/img/img_index_01.png" alt="">
                            </picture>
                            <div class="m-mediaLayout__contents">
                                <ul class="un-menu-drink__layout un-menu-drink__layout--type01">
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--01">
                                        <div class="un-menu-drink__layoutHeading"><b>ビール</b></div>
                                        <ul class="un-menu-drink__layoutList m-list">
                                            <li class="m-list__item">生ビール</li>
                                            <li class="m-list__item">キリンラガー中瓶</li>
                                            <li class="m-list__item">ノンアルコールビール</li>
                                        </ul>
                                    </li>
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--02">
                                        <div class="un-menu-drink__layoutHeading"><b>ハイボール</b></div>
                                        <ul class="un-menu-drink__layoutList m-list">
                                            <li class="m-list__item">ハイボール</li>
                                            <li class="m-list__item">ジンジャーハイボール</li>
                                            <li class="m-list__item">コークハイボール</li>
                                        </ul>
                                    </li>
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--03">
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
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--04">
                                        <div class="un-menu-drink__layoutHeading"><b>焼酎</b></div>
                                        <ul class="un-menu-drink__layoutList m-list">
                                            <li class="m-list__item">芋焼酎 ヤマネコ</li>
                                            <li class="m-list__item">芋焼酎 富乃宝山</li>
                                            <li class="m-list__item">麦焼酎 中々</li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.m-list-columns -->
                            </div><!-- /.m-mediaLayout__contents -->
                        </div><!-- /.m-mediaLayout -->

                        <div class="m-mediaLayout m-mediaLayout--reverse">
                            <picture class="m-mediaLayout__media m-width-50-pc">
                                <source srcset="<?php echo get_template_directory_uri()?>/menu/img/img_index_02.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri()?>/menu/img/img_index_02.png" alt="">
                            </picture>
                            <div class="m-mediaLayout__contents">
                                <ul class="un-menu-drink__layout un-menu-drink__layout--type02">
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--05">
                                        <div class="un-menu-drink__layoutHeading"><b>ワイン</b></div>
                                        <ul class="un-menu-drink__layoutList m-list">
                                            <li class="m-list__item">ワイン フランジア 赤</li>
                                            <li class="m-list__item">ワイン フランジア 白</li>
                                        </ul>
                                    </li>
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--06">
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
                                    <li class="un-menu-drink__layoutItem un-menu-drink__layoutITem--07">
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
                            </div><!-- /.m-mediaLayout__contents -->
                        </div><!-- /.m-mediaLayout -->
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

    <?php get_template_part('./templates/template-contact'); ?>
    
    <?php get_template_part('./templates/template-breadcrumb'); ?>
</main>

<!-- フッター -->
<?php get_footer(); ?>
