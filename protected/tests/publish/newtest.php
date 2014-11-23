<?php

					$temTBHref = 'http://item.taobao.com/item.htm?spm=a230r.1.14.5.ISqJpL&id=41102878556&ns=1&abbucket=13#detail';
					preg_match('/&id=[0-9]{10,12}/is', $temTBHref, $temTBId);
					$temTBId = str_replace('&id=','',$temTBId[0]);
					print_r($temTBId);

