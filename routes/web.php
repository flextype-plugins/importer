<?php

namespace Flextype;

$app->group('/' . $admin_route, function () use ($app) : void {
    $app->get('/importer', 'ImporterController:index')->setName('importer.index');
})->add(new AuthMiddleware($flextype));
