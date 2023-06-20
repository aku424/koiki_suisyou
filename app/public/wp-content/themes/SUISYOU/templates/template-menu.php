<div class="m-media">
    <div class="m-media__media">
        <img src="<?php the_field('image'); ?>" alt="">
    </div>
    <?php
        $item = get_field('speech_bubble');
        if ($item): ?>
        <img src="<?php the_field('speech_bubble')?>" alt="" class="m-mediaBubble">
    <?php endif; ?>

    <div class="m-media__text">
        <span class="m-media__textMenu"><?php the_title(); ?></span>
        <span class="m-media__price"><?php the_field('price')?></span>
    </div><!-- /.m-media__text -->
    <p class="m-media__desc"><?php the_field('textarea')?></p>
    <!-- ラベルがあれば表示 -->
    <?php 
        $terms = get_the_terms(get_the_ID(), 'one_word'); 
        if ($terms): 
        ?>
        <ul class="m-media__label">
            <?php foreach ($terms as $term): ?>
                <li class="m-media__labelItem"><?php echo esc_html($term->name); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;?>
</div><!-- /.m-media -->