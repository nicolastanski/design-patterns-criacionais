<?php

use Alura\DesignPattern\Log\FileLogManager;
use Alura\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

$logManager1 = new FileLogManager(__DIR__ . '/log.txt');
$logManager1->log('info', 'Testando log manager');

$logManager2 = new StdoutLogManager();
$logManager2->log('info', 'Testando log manager');