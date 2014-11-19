<?php
$typeContent = "aa15828270957bbbb917595913cc0731-88888888";
$typeContent = preg_replace("/^(((d{3}))|(d{3}-))?((0d{2,3})|0d{2,3}-)?[1-9]d{6,8}$/","",$typeContent);
		//$typeContent = preg_replace("/(?:1[3|4|5|8]d{1}|15[03689])d{8}$/","",$typeContent);
		//$typeContent = preg_replace("/[1-9]{1}[0-9]{5,12}/","",$typeContent);
		print $typeContent;
