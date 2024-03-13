<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class UsersController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $model = new UserModel();

        try {
            $users = $model->findAll();
            return $this->respond($users);
        } catch (\Exception $e) {
            return $this->failServerError('Er is een fout opgetreden: ' . $e->getMessage());
        }
    }
}
