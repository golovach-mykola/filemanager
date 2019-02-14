<?php
require 'vendor/autoload.php';

use App\Engine\DI;
use App\Engine\Storage;

DI::start();

require 'routes/route.php';

$app = Storage::get('App');

try {
    $app->run();
} catch (\Exception $e) {
    print_r($e->getMessage());
}
