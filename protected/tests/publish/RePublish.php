<?php
	$times = 3;
	for($i=1;$i<=$times;$i++)
	{
		exec("d:/wamp/bin/php/php5.4.3/phpunit publish/Go2Publish.php",$out);
		if(isset($out[count($out)-1]))
		{
			if(strpos($out[count($out)-3],'Errors') !== false)
			{
				exec("d:/wamp/bin/php/php5.4.3/phpunit publish/Go2Publish.php",$out);
			}else
			{
				$times = $i;
				break;
			}
		}
	}
	echo "\n-------------The result of the $times time-----------------------\n";
	echo $out[count($out)-1];
	echo "\n------------------------------------------------------------\n";
