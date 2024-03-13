<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\PostModel;

class PostsController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new PostModel();
        $posts = $model->findAll();

        return $this->respond($posts);
    }
}
