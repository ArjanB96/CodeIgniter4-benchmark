<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\CommentModel;

class CommentsController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new CommentModel();
        $comments = $model->findAll();

        return $this->respond($comments);
    }
}
