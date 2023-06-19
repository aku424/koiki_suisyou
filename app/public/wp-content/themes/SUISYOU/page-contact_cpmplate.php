<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="m-mv">
        <div class="m-mv__inner">
            <div class="m-mv__heading">
                <h1 class="m-mv__headingText"><?php echo get_the_title();?></h1>
                <h1 class="m-mv__headingSubText">CONTACT</h1>
            </div><!-- /.m-mv__heading -->

            <div class="m-mv__text">
                <p class="m-mv__textItem">名古屋コーチンの翠翔へのWebからのお問い合わせは、こちらのフォームよりご連絡ください。</p>
                <p class="m-mv__textItem">LINE公式アカウントからも、お問い合わせが可能です。</p>
            </div><!-- /.m-mv__text -->

        </div><!-- /.m-mv__inner -->
    </div><!-- /.m-mv -->


    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                <p class="un-from__text">お問い合わせありがとうございます。</p>
                <p class="un-from__subText">お問い合わせ内容を確認次第、追って連絡させていただきます。</p>
                <p class="un-from__subText">何卒よろしくお願いいたします。</p>
                <div class="un-form__button">
                    <div class="m-button m-button--nonMark m-button--bg">
                        <a href="<?php echo home_url('/'); ?>" class="m-button__link">
                            <div class="m-button__inner">
                                <span class="m-button__text">TOPに戻る</span>
                            </div> 
                        </a>
                    </div><!-- /.m-button -->
                </div><!-- /.un-form__button -->
            </div>
        </div>
    </div><!-- /.l-content -->



    <?php get_template_part('./templates/template-breadcrumb'); ?>

    <?php get_template_part('./templates/template-contact'); ?>  
</main>

<!-- フッター -->
<?php get_footer(); ?>
