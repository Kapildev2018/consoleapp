#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Console\AddCommand;
use Console\DiffCommand;

$app = new Application();
$app->add(new AddCommand());
$app->add(new DiffCommand());
$app->run();