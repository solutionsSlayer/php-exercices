<?php

function custom_autoloader($class)
{
    include __DIR__ . '/' . $class . '.php';
}

spl_autoload_register('custom_autoloader');
