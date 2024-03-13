<?php

namespace App\Controllers;

use App\Models\MockDataModel;
use CodeIgniter\Controller;
use CodeIgniter\Cache\CacheInterface;
use CodeIgniter\Config\Services;

class MockDataController extends BaseController
{
    public function index()
    {
        // Get the cache service
        $cache = Services::cache();

        // Define a unique cache key
        $cacheKey = 'mock_data';

        // Try to retrieve the data from the cache
        if (!$cachedData = $cache->get($cacheKey)) {
            // If the data is not in the cache, retrieve it from the database
            $mockDataModel = new MockDataModel();
            $data['mockData'] = $mockDataModel->findAll();

            // Cache the retrieved data for 180 seconds
            $cache->save($cacheKey, $data['mockData'], 180);
        } else {
            // Use the data from the cache
            $data['mockData'] = $cachedData;
        }

        // Load the view and pass the retrieved data
        return view('mockdata_view', $data);
    }
}
