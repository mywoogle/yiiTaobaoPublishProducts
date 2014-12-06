<?php
$tem = '34-/3d,35,36,27';
//'/^[\d;,\.]+$/' 
var_dump((bool)preg_match("/^[\d,]+$/",$tem));