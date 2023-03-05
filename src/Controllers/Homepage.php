<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Template\FrontendRenderer;
use Http\Request;
use Http\Response;

class Homepage
{

    public function __construct(
        public readonly Response $response,
        public readonly Request $request,
        public readonly FrontendRenderer $renderer
    ) {
    }

    public function show()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
        ];
        $html = $this->renderer->render('Homepage', $data);
        $this->response->setContent($html);
    }
}
