<?php

require_once 'vendor/autoload.php';

use Acme\Services\UserService;
use App\Utils\Logger;

$logger = new Logger();
$logger->info('hello');

$userService = new UserService('John');
$userService->printName();
