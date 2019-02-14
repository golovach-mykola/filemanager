<?php

namespace App\Controller;

use App\Engine\File;

class FileController extends MainController {
    
    public function all()
    {
        $this->response->content = File::fileList();
        return $this->response->json();
    }

    public function get()
    {
        $this->response->content = File::get($this->request->getParam('file'));
        return $this->response->render();
    }


    public function add(){
        $this->response->content = File::put($this->request->getFile('file'));
        return $this->response->json();
    }

    public function delete(){
        $this->response->content = File::delete($this->request->getParam('file'));
        return $this->response->json();
    }

}