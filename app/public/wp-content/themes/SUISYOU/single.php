<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メイン -->
<main>
    <div class="m-mv">
        <div class="m-mv__inner">
            <div class="m-mv__heading">
                <span class="m-mv__headingSubText">INFORMATION</span>
                <time class="m-mv__headingDate" datetime="2023-7-10">23/07/10</time>
            </div><!-- /.m-mv__heading -->

            <div class="m-mv__text">
                <h1 class="m-mv__title">
                    <?php the_title();?>
                </h1>
            </div><!-- /.m-mv__text -->

        </div><!-- /.m-mv__inner -->
    </div><!-- /.m-mv -->

    <div class="un-news__thumbnail">
        <img src="https://placehold.jp/800x400.png" alt="">
    </div><!-- /.un-news__thumbnail -->
                
    <div class="l-content l-content--narrow">
        <div class="l-content__inner">
            <div class="l-content__body">
                <div class="l-newsContent">
                    <?php echo the_content();?>
                </div><!-- /.l-newsContent -->
            </div>
        </div>
    </div><!-- /.l-content -->

    <?php get_template_part('./templates/template-pagination'); ?>

    <?php get_template_part('./templates/template-breadcrumb'); ?>

    <?php get_template_part('./templates/template-contact'); ?>    
</main>

<!-- フッター -->
<?php get_footer(); ?>
