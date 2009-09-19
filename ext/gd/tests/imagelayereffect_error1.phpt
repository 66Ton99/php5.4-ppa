--TEST--
Testing imagelayereffect() with invalid resource of GD library
--CREDITS--
Rafael Dohms <rdohms [at] gmail [dot] com>
#testfest PHPSP on 2009-06-20
--SKIPIF--
<?php 
	if (!extension_loaded("gd")) die("skip GD not present");
	if (!GD_BUNDLED) die('function only available in bundled, external GD detected');
?>
--FILE--
<?php
$layer = imagelayereffect('invalid_resource', IMG_EFFECT_REPLACE);
?>
--EXPECTF--
Warning: imagelayereffect(): supplied argument is not a valid Image resource in %s on line %d
