<?php

namespace App\Controllers;

use App\Models\UserModel;

class TestController extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        // Try a simple query
        try {
            $users = $model->findAll();
            echo "Verbinding met de database is succesvol!";
        } catch (\Exception $e) {
            echo "Fout bij het maken van verbinding met de database: " . $e->getMessage();
        }
    }
}
