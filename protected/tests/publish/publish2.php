<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//$this->open("http://go2.cn/product/oqcggg.go?_page=fh_1&_cat=all&_pos=1&_type=img");
		//$this->type("//input[@id='username']", 'woogle111');
		//$this->type("//input[@id='password']", 'woogle735');
		//$this->pause(180000);
		//include_once('publish_publish.php');
		//$this->click("//input[@class='login_button']");
		//$this->pause(1800000000);
		//http://www.go2.cn/product/publish/ocgqmk
		//$s='acc123nmnm4545';
		//if (preg_match('|(\d+)|',$s,$r)) echo $r[1];
		$finds=array(
			'q',
			'Q',
			'电',
			'话',
			'地',
			'址',
			'厂',
			'家',
			"号",
			'GO2',
			'go2',
			'代',
			'传',
			'真',
			'联',
			'系',
			'手',
			'机',
			'品',
			'牌',
			'包装',
			'鞋业',
			'群',
			'支付宝',
			'商贸城',
			'单',
			'发',
			'价',
			);
		$temTextEnd = array();
		$this->open("http://www.baidu.com/");
$js = <<<Eof
	var target=document.getElementById("lg");  
	var a=document.createElement("a");  
	a.id="myProduct"; 
	a.href="http://go2.cn/product/oqcggg.go?_page=fh_1&_cat=all&_pos=1&_type=img";
	a.innerHTML="Tem product";
	target.appendChild(a);  
Eof;
		$this->runScript($js);
		$this->click("//a [@id='myProduct']");
		$this->waitForElementPresent ("//div[@id='productmemo']");
		$temText = $this->getText("//div[@id='productmemo']");
		$temTextArry  = explode("\n", $temText);
		//file_put_contents('test.txt', $temText);

		foreach ($temTextArry as $item) 
		{
			if (trim($item) != '') 
			{
				foreach ($finds as $find) 
				{
					if (strpos($item, $find) !== false)
					{
						if (!in_array($item,$temTextEnd))
						{
							$temTextDel[] = trim($item)."\n";
						}
					}
				}
				if (!in_array($item,$temTextEnd))
				{
					$temTextAll[] = trim($item)."\n";
				}
			}
		}
		$temTextAll = array_flip($temTextAll);
		$temTextAll = array_flip($temTextAll);
		$temTextDel = array_flip($temTextDel);
		$temTextDel = array_flip($temTextDel);
		$temTextEnd = array_diff($temTextAll, $temTextDel);
		$temTextEndNew = array();
		foreach($temTextEnd as $item)
		{
			if(strpos($item,'加'))
			{
				preg_match_all('|(\d+)|',$item,$addPrices);
				foreach ($addPrices[0] as $addPrice)
				{
					$temFlag = '加'.$addPrice.'元';
					if (strpos($item,$temFlag)) 
					{
						$newTemFlag = '加'.$addPrice*2 .'元';
						$item = str_replace($temFlag, $newTemFlag, $item);
					}
				}
			}
			if (!in_array($item,$temTextEndNew))
			{
				$temTextEndNew[] = trim($item)."\n";
			}
		}
		file_put_contents('test.txt', $temTextEndNew);
	}
}
