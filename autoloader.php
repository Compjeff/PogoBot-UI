<?php

spl_autoload_register(function ($class_name) {
    include __DIR__. '/library/' . $class_name . '.php';
});