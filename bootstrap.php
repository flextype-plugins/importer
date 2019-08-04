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

include_once 'app/Controllers/ImporterController.php';
include_once 'routes/web.php';
include_once 'dependencies.php';
