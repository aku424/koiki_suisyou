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
