<?php

declare(strict_types = 1);

ini_set("display_errors", "1");

$page = $_GET["page"];

/**
* localhost:8000?page='file name'
* php -S localhost:8000 -t public
*
*/
require dirname(__DIR__) . "/{$page}.php";
