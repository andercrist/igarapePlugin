<?php 
/*
 * Plugin Name: Igarapé Adicionais Plugin
 * Plugin URI: http://www.igarape.org.br
 * Description: Igarapé Adicionais Plugin
 * Version: 1.0
 * Author: Anderson Silva
 * Author URI: http://www.haarieh.com/
*/
function igarape_init() {
	$server = $_SERVER['SERVER_NAME'];
	$endereco = $_SERVER ['REQUEST_URI'];
	$res = "http://" . $server . $endereco;
	$url = substr($res, 22, 2);
 	$ac = $url;
 	$bd = 'en';
    $qode_options = get_option('qode_options_stockholm');
    $en = "http://igarape.org.br/wp-content/themes/stockholm/en.jpg";
    $pt = "http://igarape.org.br/wp-content/themes/stockholm/pt.png";
    if($ac === $bd) {    	
    	$qode_options['logo_image'] = $en;
    	$qode_options['logo_image_light'] = $en;
    	$qode_options['logo_image_dark'] = $en;
    	update_option('qode_options_stockholm',$qode_options);
    } else {
    	$qode_options['logo_image'] = $pt;
    	$qode_options['logo_image_light'] = $pt;
    	$qode_options['logo_image_dark'] = $pt;
    	update_option('qode_options_stockholm',$qode_options);

    }
}
add_action('init', 'igarape_init');
?>

