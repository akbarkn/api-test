<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('test:unit', function () {
    $this->comment(shell_exec(base_path("vendor/bin/phpunit -v --testsuite Unit")));
})->describe('Run Unit Test Alone');

Artisan::command('test:integration', function () {
    $this->comment(shell_exec(base_path("vendor/bin/phpunit -v --testsuite Feature")));
})->describe('Run Integration Test Alone');

Artisan::command('test:all', function () {
    $this->comment(shell_exec(base_path("vendor/bin/phpunit -v")));
})->describe('Run Both Unit And Integration Test');