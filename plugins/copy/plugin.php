<?php
/**
 * Plugin Name: Easy copyright editor
 * Plugin URI: 
 * Description: Removes the "Powered by" text in footer and replaces it with the field "license to" in PHPVibe 4.0+
 * Version: 2.0
 * Author: PHPVibe Crew
 * Author URI: 
 * License: Commercial
 */
function _copyrightremoval($text){
$text = _html(get_option('licto'));
return $text;
}
add_filter('tsitecopy', '_copyrightremoval');
?>