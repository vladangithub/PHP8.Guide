<?php error_reporting(-1);
require_once __DIR__ . '/../vendor/autoload.php';

define("CONST_1", "value 1");

echo CONST_1;

const CONST_2 = '55695555';

var_dump(CONST_2);

//dump(CONST_1, CONST_2);
dump(CONST_2);

const NAME = 'John';
echo "Hello, {NAME}";

//define("CONST_1", "new value 1");

var_dump(get_defined_constants(true));


