<?php 


add_action('wp_enqueue_scripts', function (){
    wp_enqueue_script('main', '/wp-content/themes/covid19_indonesia/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slide', '/wp-content/themes/covid19_indonesia/js/slide.js', array('jquery'), '1.0.0', true);
});


?>