<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//http://item.taobao.com/item.htm?id=36970792263
		$criteria = new CDbCriteria;
		$criteria->select = 'target_taobao_id';
		$criteria->condition = 'target_title_search=:target_title_search';
		$criteria->params = array(':target_title_search'=>0);
		$taobaoIds = Target::model()->findAll($criteria);
		$taobaoIdsNew = array();
		foreach ($taobaoIds as $taobaoId)
		{  
            $taobaoIdsNew[] = $taobaoId['target_taobao_id'];  
		}
		//print_r($taobaoIds);
		//$this->pause(50000);
		//file_put_contents("publish/reports/test.txt",$taobaoIdsNew);
		$taobaoAttrsTitles = array(
			'帮面材质',
			'内里材质',
			'开口深度',
			'鞋头款式',
			'跟高',
			'鞋跟款式',
			'市年份季节',
			'风格',
			'皮质特征',
			'鞋底材质',
			'流行元素',
			'闭合方式',
			'图案'
		);
		$flag = 0;
		foreach($taobaoIdsNew as $taobaoIdNew)
		{
$js = <<<Eof
	var target=document.getElementById("lg");  
	var a=document.createElement("a");  
	a.id="myProduct"; 
	a.href="http://item.taobao.com/item.htm?id=$taobaoIdNew";
	a.innerHTML="Tem product";
	target.appendChild(a);  
Eof;
			$this->open("http://www.baidu.com/");
			$this->runScript($js);
			$this->click("//a [@id='myProduct']");
			$this->waitForElementPresent ("//div[@id='attributes']/ul");
			//$this->isElementPresent("//ul[@id='propsul']/li[1]");
			$taobaoAttrsTem = array();
			for($i=1;$i<=30;$i++)
			{
				if($this->isElementPresent("//div[@id='attributes']/ul/li[$i]"))
				{
					$temAttr = $this->getText("//div[@id='attributes']/ul/li[$i]");
					$temAttrItem = explode(':', $temAttr);
					$temAttrTitle = $temAttrItem[0];
					$temAttrValue = trim($temAttrItem[1]);
					if(in_array($temAttrTitle, $taobaoAttrsTitles))
					{
						$taobaoAttrsTem[] = $temAttrTitle . ':' . $temAttrValue;
						$flag++;
					}
				}else
				{
					$i = 100;
				}
			}
			$taobaoAttrsTemString = implode("|woogle!@#$%^&*split|", $taobaoAttrsTem);
			//file_put_contents("publish/reports/test.txt",$taobaoAttrsTemString."\n", FILE_APPEND);

			
			//   $count =Admin::model()->updateAll(array('username'=>'11111','password'=>'11111'),'password=:pass',array(':pass'=>'1111a1')); 
			//Post::model()->updateAll ($attributes,$condition,$params); 
			Target::model()->updateAll(array('target_taobao_attrs'=>$taobaoAttrsTemString),'target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$taobaoIdNew)); 
			
			//file_put_contents("publish/reports/test.txt",$taobaoIdNew."\n", FILE_APPEND);
			
			
		}
	}
}

