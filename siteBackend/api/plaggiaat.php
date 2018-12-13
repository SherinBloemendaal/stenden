<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

use App\databaseConfig;

$dbi = new databaseConfig();
$db = $dbi->getDatabase(); 

$zinID = $_GET['emotionId'];

$result = $db->query("SELECT * FROM `zinnen` WHERE emotionid = $zinID");

$alleZInnenarray = array();

while($row = mysqli_fetch_assoc($result)){
  $alleZInnenarray[] = $row['Zin'];
}

$randomKey = array_rand($alleZInnenarray, 1);

echo $alleZInnenarray[$randomKey];
