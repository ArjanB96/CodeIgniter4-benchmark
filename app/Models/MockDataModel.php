<?php

namespace App\Models;

use CodeIgniter\Model;

class MockDataModel extends Model
{
    protected $table = 'module_description'; 

    protected $primaryKey = 'moduleId'; 

    protected $allowedFields = ['moduleId', 'languageId', 'title', 'subtitle', 'description', 'buttonTitle', 'buttonLink', 'createdAt', 'updatedAt', 'deletedAt']; 

    protected $returnType = 'array'; 

    protected $useTimestamps = false; 

}
