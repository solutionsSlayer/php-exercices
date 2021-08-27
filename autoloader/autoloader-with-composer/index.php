<?php

require 'vendor/autoload.php';

$task = new Task('title', 'description', '5', 'IM A TASK');

echo $task->sayTask();