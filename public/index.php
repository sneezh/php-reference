<?php

use FulltextSearch\HashSearch;

include_once '../src/References/FulltextSearch/HashSearch.php';

// todo: implements tests for this algorithm
var_dump((new HashSearch())->contains('123', 'ab123'));