<?
 /**
 * Plugin Name: Check logged in
 * Description: Check if the user is logged into the page 
 * Version: 1.0x
 * Author: Nick Mole
 * Text Domain: ciuli-check-if-user-logged-in
 */

ob_clean(); ob_start();
require_once plugin_dir_path(__FILE__) . 'src/Helper.php';
require_once plugin_dir_path(__FILE__) . 'src/OptionsPage.php';
require_once plugin_dir_path(__FILE__) . 'src/AddMetaBox.php';
require_once plugin_dir_path(__FILE__) . 'src/SaveMetaData.php';
require_once plugin_dir_path(__FILE__) . 'src/Implement.php';


?>