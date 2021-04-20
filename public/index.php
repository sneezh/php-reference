<?php

use App\References\FulltextSearch\HashSearch;

include_once '../vendor/autoload.php';

// todo: implements tests for this algorithm
var_dump((new HashSearch())->contains('123', 'ab123'));