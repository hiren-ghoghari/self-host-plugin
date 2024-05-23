 <?php
 /*
 * Plugin Name:       Self Host Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Hiren Ghoghari
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       self-host-plugin
 */

 require 'plugin-update-checker/plugin-update-checker.php';
 use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

 $myUpdateChecker = PucFactory::buildUpdateChecker(
 	'https://github.com/hiren-ghoghari/self-host-plugin',
 	__FILE__,
 	'self-host-plugin'
 );

//Set the branch that contains the stable release.
 $myUpdateChecker->setBranch('master');

 echo "version 1.0.0";