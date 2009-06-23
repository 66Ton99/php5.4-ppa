--TEST--
Test DateTime class registration
--SKIPIF--
<?php if (!extension_loaded("reflection")) die("skip"); ?>
--FILE--
<?php

echo "*** Verify DateTime class ***\n";

echo "Verify DateTime class registered OK\n";
$class = new ReflectionClass('DateTime');
var_dump($class);

echo "..and get names of all its methods\n";
$methods = $class->getMethods(); 
var_dump($methods);

echo "..and get names of all its class constants\n"; 
$constants = $class->getConstants();
var_dump($constants);

?>
===DONE===
--EXPECTF--
*** Verify DateTime class ***
Verify DateTime class registered OK
object(ReflectionClass)#%d (1) {
  ["name"]=>
  string(8) "DateTime"
}
..and get names of all its methods
array(9) {
  [0]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(11) "__construct"
    ["class"]=>
    string(8) "DateTime"
  }
  [1]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(6) "format"
    ["class"]=>
    string(8) "DateTime"
  }
  [2]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(6) "modify"
    ["class"]=>
    string(8) "DateTime"
  }
  [3]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(11) "getTimezone"
    ["class"]=>
    string(8) "DateTime"
  }
  [4]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(11) "setTimezone"
    ["class"]=>
    string(8) "DateTime"
  }
  [5]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(9) "getOffset"
    ["class"]=>
    string(8) "DateTime"
  }
  [6]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(7) "setTime"
    ["class"]=>
    string(8) "DateTime"
  }
  [7]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(7) "setDate"
    ["class"]=>
    string(8) "DateTime"
  }
  [8]=>
  &object(ReflectionMethod)#%d (2) {
    ["name"]=>
    string(10) "setISODate"
    ["class"]=>
    string(8) "DateTime"
  }
}
..and get names of all its class constants
array(11) {
  ["ATOM"]=>
  string(13) "Y-m-d\TH:i:sP"
  ["COOKIE"]=>
  string(16) "l, d-M-y H:i:s T"
  ["ISO8601"]=>
  string(13) "Y-m-d\TH:i:sO"
  ["RFC822"]=>
  string(16) "D, d M y H:i:s O"
  ["RFC850"]=>
  string(16) "l, d-M-y H:i:s T"
  ["RFC1036"]=>
  string(16) "D, d M y H:i:s O"
  ["RFC1123"]=>
  string(16) "D, d M Y H:i:s O"
  ["RFC2822"]=>
  string(16) "D, d M Y H:i:s O"
  ["RFC3339"]=>
  string(13) "Y-m-d\TH:i:sP"
  ["RSS"]=>
  string(16) "D, d M Y H:i:s O"
  ["W3C"]=>
  string(13) "Y-m-d\TH:i:sP"
}
===DONE===
