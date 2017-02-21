<?php
/*
Plugin Name: Chrome debug
Description: Display debug messages in Google Chrome Debug and Firefox Web Console
Version: 0.1
Author: Luis Sacristán
Author URI: http://sentidoweb.com
*/

/**
 * Chrome debug alias
 */
include_once 'chromephp/ChromePhp.php';

/**
 * Logs a message in the Chrome console
 * 
 * @param string $message Text to log
 * @param string $type 'info', 'warn', 'error', 'info', 'table', 'group', 'groupEnd'
 */
function _debug($message, $type='info') {
  switch($type) {
    case 'warn':
      ChromePhp::warn($message);
      break;
    case 'info':
      ChromePhp::info($message);
      break;
    case 'error':
      ChromePhp::error($message);
      break;
    case 'info':
      ChromePhp::info($message);
      break;
    case 'table':
      ChromePhp::table($message);
      break;
    case 'group':
      ChromePhp::group($message);
      break;
    case 'groupEnd':
      ChromePhp::groupEnd();
      break;
    default:
      ChromePhp::log($message);
  }
}