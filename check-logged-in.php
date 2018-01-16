<?
 /**
 * Plugin Name: Check logged in
 * Description: Check if the user is logged into the page 
 * Version: 1.0x
 * Author: Nick Mole
 * Text Domain: ciuli-check-if-user-logged-in
 */


//In wordpress - on_cleqn is used to erase output buffer to help Redirct with no issues
 ob_clean(); ob_start();
require_once plugin_dir_path(__FILE__) . 'src/Helper.php';
require_once plugin_dir_path(__FILE__) . 'src/OptionsPage.php';
require_once plugin_dir_path(__FILE__) . 'src/AddMetaBox.php';
require_once plugin_dir_path(__FILE__) . 'src/SaveMetaData.php';
require_once plugin_dir_path(__FILE__) . 'src/Implement.php';
//Shortcode page
require_once plugin_dir_path(__FILE__) . 'shortcode/shortcodeLoginRedirect.php';
require_once plugin_dir_path(__FILE__) . 'shortcode/shortcodeHeaderStatus.php';

require_once plugin_dir_path(__FILE__) . 'whereverlogout/whereverlogout.php';
require_once plugin_dir_path(__FILE__) . 'ciuli-menuonlywhenlogged-in/ciuli-menuonlywhenlogged-in.php';
require_once plugin_dir_path(__FILE__) . 'overwrite-vc-wp-logout/overwrite-vc-wp-logout.php';

?>