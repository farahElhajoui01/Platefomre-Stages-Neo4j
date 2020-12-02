<?php
// connect to mongodb
// connect to mongodb
require 'vendor/autoload.php'; // include Composer's autoloader
$db = (new MongoDB\Client("mongodb://localhost:27017"))->Stages_db;