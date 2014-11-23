<?php
include 'phpQuery.php';  
class newTest extends WebTestCase
{
	public function testSet()
	{
		//http://item.taobao.com/item.htm?id=36970792263
		/*
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

			
			//$count =Admin::model()->updateAll(array('username'=>'11111','password'=>'11111'),'password=:pass',array(':pass'=>'1111a1')); 
			//Post::model()->updateAll ($attributes,$condition,$params);
			//target_title_search
			Target::model()->updateAll(array('target_taobao_attrs'=>$taobaoAttrsTemString, 'target_title_search'=>1),'target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$taobaoIdNew)); 
			
			//file_put_contents("publish/reports/test.txt",$taobaoIdNew."\n", FILE_APPEND)


		}
		*/
		//---------------------search start.-----------------
		//get all taobaoId in dataBase
		$criteria = new CDbCriteria;
		$criteria->select = 'target_taobao_id,source_taobao_id1,source_taobao_id2,source_taobao_id3';
		$taobaoIdsDataBase = Target::model()->findAll($criteria);
		$taobaoIdsDataBaseNew = array();
		foreach ($taobaoIdsDataBase as $taobaoIdDataBase)
		{  
 			$taobaoIdsDataBaseNew[] = $taobaoIdDataBase['source_taobao_id1']; 
			$taobaoIdsDataBaseNew[] = $taobaoIdDataBase['source_taobao_id2']; 
			$taobaoIdsDataBaseNew[] = $taobaoIdDataBase['source_taobao_id3']; 
		}
		//$taobaoIdsDataBaseNew1 = implode('---', $taobaoIdsDataBaseNew);
		//file_put_contents("publish/reports/test.txt",$taobaoIdsDataBaseNew1."\n", FILE_APPEND);
		$taobaoIdsDataBaseEnd = array_unique($taobaoIdsDataBaseNew);
		//$taobaoIdsDataBaseEnd1 = implode('---', $taobaoIdsDataBaseEnd);
		//file_put_contents("publish/reports/test.txt",$taobaoIdsDataBaseEnd1."\n", FILE_APPEND);

		
		
		//search in taobao by keys
		$temSourceTaobaoIds = array();
		$keys = array(
			'女靴',
			'靴子',
		);
		foreach($keys as $key)
		{
			//http://s.taobao.com/search?sort=sale-desc&tab=all&q=女靴&s=44
			for($i=0;$i<7;$i++)
			{
				$page = $i*44;
				$taobaoUrl = "http://s.taobao.com/search?sort=sale-desc&tab=all&q=$key&s=$page";
				$this->open("$taobaoUrl");
				//$temTBId = $this->getAttribute("//div[@id='page']/div[2]/div[1]/div/div[6]/div/div[1]/@nid");
				//$temTBId = $this->getText("//div[@id='page']/div[2]/div[1]/div[1]/div[@class='tb-content']");
				////div[@id='brix_brick_114']/div[2]/div/div[4]/div[2]
				
				//$temTBId = $this->getAttribute("//div[@id='mainsrp-itemlist']/div/div/div/div[5]/div[3]/a/@href");

				//$this->pause(50000000);
				for($j=1;$j<=44;$j++)
				{
					$temTBHref = $this->getAttribute("//div[@id='mainsrp-itemlist']/div/div/div/div[$j]/div[3]/a/@href");
					//http://item.taobao.com/item.htm?spm=a230r.1.14.5.ISqJpL&id=41102878556&ns=1&abbucket=13#detail
					preg_match('/id=[0-9]{10,12}/is', $temTBHref, $temTBId);
					$temTBIdNew = str_replace('id=','',$temTBId[0]);
					//file_put_contents("publish/reports/test.txt",$temTBIdNew ."\n", FILE_APPEND);
					if(!in_array($temTBIdNew,$taobaoIdsDataBaseEnd))
					{
						$temSourceTaobaoIds[] = $temTBIdNew;
					}
				}
				/*
				$temSourceTaobaoIds1 = implode('-',$temSourceTaobaoIds);
				file_put_contents("publish/reports/test.txt",$temSourceTaobaoIds1 ."\n", FILE_APPEND);
				$this->pause(50000000);
				*/
			}
		}
		
		//对比属性是否相等
		
			
			
			
			
		//---------------------search end.-----------------           

	}
}

