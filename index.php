<?php
use Marc\Task;

require 'vendor/autoload.php';
require 'models/connexion.php';

$pdo = Connection::make();

$tasks = [
    new Task('Go to the store'),
    new Task('Call Gf'),
    new Task('Clean my room')
];

$tasks[0]->complete();
require 'index.view.php';