<?php
function my_script_init() {
    if (is_front_page()) {
        wp_enqueue_style("splide-style", get_template_directory_uri() . "/common/styles/splide-core.min.css", array(), filemtime(get_theme_file_path('/common/styles/splide-core.min.css')), "all");
        wp_enqueue_style("google-font", "https://fonts.googleapis.com");
        wp_enqueue_style("google-font", "https://fonts.gstatic.com");
        wp_enqueue_style("google-font", "hhttps://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=PT+Sans:wght@400;700&family=Roboto+Condensed&display=swap");
        wp_enqueue_script("splide-script", get_template_directory_uri() . "/common/scripts/splide.min.js", array("jquery"), true);
    }

    wp_enqueue_style("common-style", get_template_directory_uri() . "/common/styles/index.css", array(), filemtime(get_theme_file_path('/common/styles/index.css')), "all");
    wp_enqueue_script("common-script", get_template_directory_uri() . "/common/scripts/index.js", array("jquery"), filemtime(get_theme_file_path('/common/scripts/index.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

// ヘッダーの画像をページごと切り替える
// function get_header_image()
// {
//     global $post; // グローバル宣言をして、関数内でもグローバル変数「$post」から投稿IDを取得できるようにする

//     if (is_page()) : // 固定ページが表示されている場合
//         return get_the_post_thumbnail($post->ID, 'large'); // アイキャッチ画像をラージサイズで表示
//     elseif (is_category('news') || is_singular('post')) : // それ以外で、もしカテゴリー名「news」のアーカイブが表示されているか、または通常の投稿ページが表示されている場合
//         return '<img src="' . get_template_directory_uri() . '/img/hoge.jpg"/>'; // hoge.jpg を出力
//     else : // それ以外は
//         return '<img src="' . get_template_directory_uri() . '/img/fuga.jpg"/>'; // fuga.jpg を出力
//     endif;
// }

// 投稿一覧のアーカイブを有効
// function post_has_archive($args, $post_type){
//     if ('post' == $post_type) {
//         $args['rewrite'] = true; 
//         $args['has_archive'] = 'news'; 
//     }
//     return $args;
// }
// add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function post_has_archive($args, $post_type)
{

    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* アーカイブページのタイトル変更 */
add_filter( 'get_the_archive_title', function ( $title ) {
    if ( is_archive() ) {
        $title = 'お知らせ';
    }
    return $title;
});


