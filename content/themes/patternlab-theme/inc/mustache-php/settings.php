<?php

// Load mustache.php
require get_template_directory() . '/lib/mustache-php/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

// Set path to PatternLab mustache templates
function get_mustache() {
    $path = realpath(dirname(__FILE__) . '/../../../patternlab/source/03-templates/');
    return new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader( $path ),
    ]);
}
