<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

const DATABASE_HOST = "localhost";
const DATABASE_USER = "stenden";
const DATABASE_PASS = "Welkom10";
const DATABASE_NAME = "stenden";

class databaseConfig {

    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

        if($this->conn->error) {
            return false;
        }

    }

    public function getDatabase()
    {
        if(!$this->conn) {
            $this->__construct();
        }
        return $this->conn;

    }



}