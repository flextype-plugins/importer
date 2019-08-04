<?php

namespace Flextype;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use function Flextype\Component\I18n\__;

/**
 * @property View $view
 * @property Entries $entries
 */
class ImporterController extends Controller {

    /**
     * Index page
     *
     * @param Request  $request  PSR7 request
     * @param Response $response PSR7 response
     * @return Response
     */
    public function index(Request $request, Response $response) : Response
    {
        return $this->view->render(
            $response,
            'plugins/importer/views/templates/index.html',
            [
                'menu_item' => 'tools',
                'data' => 'data...',
            ]
        );
    }
}
