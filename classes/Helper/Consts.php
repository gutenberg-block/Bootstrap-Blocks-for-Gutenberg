<?php
namespace Bsgut\Helper;

defined('ABSPATH') or die('Cheatin&#8217, hu?');

abstract class Consts{

  const PLUGIN_NAME = "Bootstrap Blocks for Gutenberg";
  const PLUGIN_SLUG = "bootstrap-blocks-for-gutenberg";
  const PLUGIN_PREFIX = "bsgut";
  const LANG_DOMAIN = "bsgut";
  const VERSION = '1.0';

  const SETTINGS_GROUP = 'bsgut-settings';
  const SETTING_ENABLED = Consts::PLUGIN_PREFIX . "-setting-enabled";
  const SETTING_REPLACE = Consts::PLUGIN_PREFIX . "-setting-replace";

	const BLOCKS_SCRIPT = 'blocks';
  const BLOCKS_JSON = 'blocks';
}
