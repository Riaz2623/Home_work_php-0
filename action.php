<?php

require_once 'vendor/autoload.php';
use App\classes\Example;

$calculator = new Example($_POST);
$result = $calculator->index();

include 'index.php';