--TEST--
Test gzdeflate() function : error conditions 
--SKIPIF--
<?php 
if (!extension_loaded("zlib")) {
	print "skip - ZLIB extension not loaded"; 
}	 
?>
--FILE--
<?php
/* Prototype  : string gzdeflate(string data [, int level])
 * Description: Gzip-compress a string 
 * Source code: ext/zlib/zlib.c
 * Alias to functions: 
 */

/*
 * add a comment here to say what the test is supposed to do
 */

echo "*** Testing gzdeflate() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing gzdeflate() function with Zero arguments --\n";
var_dump( gzdeflate() );

//Test gzdeflate with one more than the expected number of arguments
echo "\n-- Testing gzdeflate() function with more than expected no. of arguments --\n";
$data = 'string_val';
$level = 2;
$extra_arg = 10;
var_dump( gzdeflate($data, $level, $extra_arg) );

echo "\n-- Testing with incorrect compression level --\n";
$bad_level = 99; 
var_dump(gzdeflate($data, $bad_level));

class Tester {
    function Hello() {
        echo "Hello\n"; 
    }
}

echo "\n-- Testing with incorrect parameters --\n";
$testclass = new Tester();
var_dump(gzdeflate($testclass));
var_dump(gzdeflate($data, $testclass));

?>
===Done===
--EXPECTF--
*** Testing gzdeflate() : error conditions ***

-- Testing gzdeflate() function with Zero arguments --

Warning: gzdeflate() expects at least 1 parameter, 0 given in %s on line %d
NULL

-- Testing gzdeflate() function with more than expected no. of arguments --

Warning: gzdeflate() expects at most 2 parameters, 3 given in %s on line %d
NULL

-- Testing with incorrect compression level --

Warning: gzdeflate(): compression level (99) must be within -1..9 in %s on line %d
bool(false)

-- Testing with incorrect parameters --

Warning: gzdeflate() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: gzdeflate() expects parameter 2 to be long, object given in %s on line %d
NULL
===Done===