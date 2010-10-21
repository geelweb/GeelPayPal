<?php

ob_start();

error_reporting(E_ALL | E_STRICT);

ini_set('display_errors', 'on');
ini_set('memory_limit', -1);
ini_set('mbstring.internal_encoding', 'utf-8');
ini_set('mbstring.script_encoding', 'utf-8');

set_include_path(
    dirname(__FILE__) . '/../library'
    . PATH_SEPARATOR . dirname(__FILE__) . '/../tests'
    . PATH_SEPARATOR . get_include_path()
);
