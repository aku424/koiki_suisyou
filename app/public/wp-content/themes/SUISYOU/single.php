<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="m-mv">
        <div class="m-mv__inner">
            <div class="m-mv__heading">
                <h1 class="m-mv__headingText"><?php the_title();?></h1>
                <span class="m-mv__headingSubText">RESTAURANT GUIDE</span>
            </div><!-- /.m-mv__heading -->

            <div class="m-mv__text">
                <p class="m-mv__textItem">名古屋コーチンの翠翔は、福井県福井市の、</p>
                <p class="m-mv__textItem">駅前と片町に2店舗構えています。</p>
            </div><!-- /.m-mv__text -->

        </div><!-- /.m-mv__inner -->
    </div><!-- /.m-mv -->

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                
            </div>
        </div>
    </div><!-- /.l-content -->

    <div class="l-content">
        <div class="l-content__inner">
            <div class="l-content__body">
                
                <h2 class="m-heading-type2">名古屋コーチンの翠翔<span class="m-newLine">片町店</span></h2>
                
            </div>
        </div>
    </div><!-- /.l-content -->


    <?php get_template_part('./templates/template-breadcrumb'); ?>

    <?php get_template_part('./templates/template-contact'); ?>    
</main>

<!-- フッター -->
<?php get_footer(); ?>
