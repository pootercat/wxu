<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: installer_params.php 16607 2010-06-03 12:37:20Z drbyte $
 */

/**
 * Runtime Parameters used by browser interface
 */
//  $session_save_path = (@ini_get('session.save_path') && is_writable(ini_get('session.save_path')) ) ? ini_get('session.save_path') : realpath('../cache');
  $session_save_path = (is_writable(realpath('../cache')) ) ? realpath('../cache') : ini_get('session.save_path');
  define('SESSION_WRITE_DIRECTORY', $session_save_path);
  define('DEBUG_LOG_FOLDER', realpath('../cache'));

  // Set the following to TRUE if having problems (blank pages, etc). Best to leave at FALSE for normal use.
  define('STRICT_ERROR_REPORTING', FALSE);


  define('DB_CHARSET', 'latin1');
