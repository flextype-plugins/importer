<?php

namespace Flextype;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Flextype\Component\Filesystem\Filesystem;
use Flextype\Component\Arr\Arr;
use Chumper\Zipper\Zipper;
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

        $zipper = new Zipper;

        // TYPEMILL
        //$zipper->make(ROOT_DIR . '/typemill.zip')->folder('content')->extractTo(PATH['site'] . '/tmp/typemill');
        $files = Filesystem::listContents(PATH['site'] . '/tmp/typemill', true);
        $a = [];
        foreach ($files as $item) {
            if ($item['type'] == 'dir' && Filesystem::has($item['path'] . '/index.md')) {
                //echo $item['path'] . '<br>';
                $a[$item['dirname']] = $item['path'];
            }
        }

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
