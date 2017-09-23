--TEST--
preg_replace_callback_array() - bad delimiter error
--FILE--
<?php
var_dump(preg_replace_callback_array(['dabd' => function ($match) {}],'subject'));
?>
--EXPECTF--
Warning: preg_replace_callback_array(): Delimiter must not be alphanumeric or backslash in %s on line %d
NULL
