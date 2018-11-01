<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

use App\databaseConfig;

class Index {

    private $database;

    public function __construct()
    {
        $db = new databaseConfig();
        $this->database = $db->getDatabase();
    }

    

}