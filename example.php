<?php
/**
 * Created by PhpStorm.
 * User: julius
 */

spl_autoload_register(function($class) {
    // rel path  = 'src\\' . $class . '.php'
    // full path = 'C:\Users\julius\Documents\GitHub\pdfparser\src\\' . $class . '.php'
    include 'src\\' . $class . '.php';
});

$parser = new \Smalot\PdfParser\Parser();

$bug = 'samples/bugs/issue1010_forms.pdf';
$pdf = $parser->parseFile($bug);

$debug = 1;


/*
"autoload": {
        "psr-0": {
            "Smalot\\PdfParser\\": "src/"
        }
    },
*/