<?php
/*
 * Plugin Name: Igarapé Adicionais Plugin
 * Plugin URI: http://www.igarape.org.br
 * Description: Igarapé Adicionais Plugin
 * Version: 1.0
 * Author: Anderson Silva
 * Author URI: http://www.haarieh.com/
*/
function function_qode_options_stockholm($qode_options_stockholm) {
    $qode_options = $qode_options_stockholm;
    $en = "http://igarape.org.br/wp-content/themes/stockholm/en.jpg";
    $pt = "http://igarape.org.br/wp-content/themes/stockholm/pt.png";
    if(ICL_LANGUAGE_CODE == "en") {
        $qode_options['logo_image'] = $en;
        $qode_options['logo_image_light'] = $en;
        $qode_options['logo_image_dark'] = $en;
    } else {
        $qode_options['logo_image'] = $pt;
        $qode_options['logo_image_light'] = $pt;
        $qode_options['logo_image_dark'] = $pt;
    }
    return $qode_options;
}
add_filter('option_qode_options_stockholm', 'function_qode_options_stockholm');
?>
<?php
/*
 * Plugin Name: Igarapé Adicionais Plugin
 * Plugin URI: http://www.igarape.org.br
 * Description: Igarapé Adicionais Plugin
 * Version: 1.0
 * Author: Anderson Silva
 * Author URI: http://www.haarieh.com/
*/
function function_qode_options_stockholm($qode_options_stockholm) {
    $qode_options = $qode_options_stockholm;
    $en = "http://igarape.org.br/wp-content/themes/stockholm/en.jpg";
    $pt = "http://igarape.org.br/wp-content/themes/stockholm/pt.png";
    if(ICL_LANGUAGE_CODE == "en") {
        $qode_options['logo_image'] = $en;
        $qode_options['logo_image_light'] = $en;
        $qode_options['logo_image_dark'] = $en;
    } else {
        $qode_options['logo_image'] = $pt;
        $qode_options['logo_image_light'] = $pt;
        $qode_options['logo_image_dark'] = $pt;
    }
    return $qode_options;
}
add_filter('option_qode_options_stockholm', 'function_qode_options_stockholm');
?>
