<div class="m-mv">
    <div class="m-mv__inner">
        <div class="m-mv__heading">
            <h1 class="m-mv__headingText"><?php echo get_the_title();?></h1>
            <div class="m-mv__headingSubText"><?php the_field('sub_title'); ?></div>
        </div><!-- /.m-mv__heading -->

        <?php
        $item = get_field('lead_sentence');

        if($item): ?>
            <div class="m-mv__text">
                <p class="m-mv__textItem"><?php echo $item; ?></p>
            </div><!-- /.m-mv__text -->
        <?php endif; ?>

    </div><!-- /.m-mv__inner -->
</div><!-- /.m-mv -->