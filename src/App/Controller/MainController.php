<?php

namespace App\Controller;

use App\Engine\Request;
use App\Engine\Response;
use App\Engine\Storage;

class MainController {

    /**
     * @var Response
     */
    public $response;

    /**
     * @var Request
     */
    public $request;

    public function __construct()
    {
        $this->response = Storage::get('Response');
        $this->request = Storage::get('Request');
    }
}