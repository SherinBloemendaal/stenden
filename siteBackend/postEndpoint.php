<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

if(!(isset($_POST))){
    return [
      'responseCode' => 500,
      'responseData' => "Error",
      'reponseErr' => "This endpoint only accepts POST requests"
    ];
}

if(!(array_key_exists("endpoint", $_POST))){
    return [
        'responseCode' => 500,
        'responseData' => "Error",
        'reponseErr' => "This endpoint only accepts POST requests"
    ];
}

if((isset($_POST['get_sentences'])) && !(empty(($_POST['get_sentences'])))){
    $dbi = new databaseConfig();
    $db = $dbi->getDatabase();
    $result = $db->query("SELECT * FROM `sentences` WHERE 1");

    if($db->error){
        return [
            'responseCode' => 500,
            'responseData' => "Error",
            'reponseErr' => "Database connection error"
        ];
    }

    if(mysqli_num_rows($result) < 1){
        return [
            'responseCode' => 200,
            'responseData' => json_encode([]),
            'reponseErr' => "Empty response, no records found."
        ];
    }

    return [
        'responseCode' => 200,
        'responseData' => json_encode(mysqli_fetch_assoc($result)),
        'reponseErr' => ""
    ];
}

