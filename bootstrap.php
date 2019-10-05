<?php

namespace Flextype;

/**
 *
 * Flextype Sitemap Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 /**
  * Set base admin route
  */
$admin_route = $flextype->registry->get('plugins.admin.route');


/**
 * Ensure vendor libraries exist
 */
! is_file($admin_autoload = __DIR__ . '/vendor/autoload.php') and exit('Please run: <i>composer install</i>');

/**
 * Register The Auto Loader
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels nice to relax.
 * Register The Auto Loader
 */
$admin_loader = require_once $admin_autoload;


include_once 'app/Controllers/ImporterController.php';
include_once 'routes/web.php';
include_once 'dependencies.php';
