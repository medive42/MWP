<?php

if (!defined('ABSPATH')) die('No direct access allowed');

// WP-Optimize advanced-cache.php (written by version: 3.0.7) (do not change this line, it is used for correctness checks)

if (!defined('WPO_ADVANCED_CACHE')) define('WPO_ADVANCED_CACHE', true);
if (!defined('WPO_CACHE_DIR')) define('WPO_CACHE_DIR', 'C:\Users\M\Documents\GitHub\MWP/wp-content/wpo-cache');
if (!defined('WPO_CACHE_CONFIG_DIR')) define('WPO_CACHE_CONFIG_DIR', 'C:\Users\M\Documents\GitHub\MWP/wp-content/wpo-cache/config');
if (!defined('WPO_CACHE_FILES_DIR')) define('WPO_CACHE_FILES_DIR', 'C:\Users\M\Documents\GitHub\MWP/wp-content/cache/wpo-cache');
if (!defined('WPO_CACHE_EXT_DIR')) define('WPO_CACHE_EXT_DIR', 'C:\Users\M\Documents\GitHub\MWP\wp-content\plugins\wp-optimize\cache/extensions');

if (is_admin()) { return; }
if (!@file_exists(WPO_CACHE_CONFIG_DIR . '/config-localhost.php')) { return; }

$GLOBALS['wpo_cache_config'] = json_decode(file_get_contents(WPO_CACHE_CONFIG_DIR . '/config-localhost.php'), true);

if (empty($GLOBALS['wpo_cache_config']) || empty($GLOBALS['wpo_cache_config']['enable_page_caching'])) { return; }

if (@file_exists('C:\Users\M\Documents\GitHub\MWP\wp-content\plugins\wp-optimize\cache/file-based-page-cache.php')) { include_once('C:\Users\M\Documents\GitHub\MWP\wp-content\plugins\wp-optimize\cache/file-based-page-cache.php'); }
