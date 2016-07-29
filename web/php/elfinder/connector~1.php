<?php

$opts = array(
    'locale' => '',
    'roots'  => array(
        array(
            'driver' => 'LocalFileSystem',
            'path'   => '/var/www/operaciones/web/bundles/CatalogoBundle/Archivos/',
            'URL'    => dirname($_SERVER['PHP_SELF']) . '/../../bundles/CatalogoBundle/Archivos/',
        )
    )
);

// run elFinder
$connector = new elFinderConnector(new elFinder($opts));
$connector->run();
