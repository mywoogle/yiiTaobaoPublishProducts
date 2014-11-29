<?php
class go2PublishTaobao extends WebTestCase
{
	public function testPublish()
	{
		$taobaoAttrsTitles = array(
			'靴筒内里材质',
			'靴筒材质',
			'上市年份季节',
			'风格',
			'帮面材质',
			'鞋面内里材质',
			'皮质特征',
			'鞋底材质',
			'靴款品名',
			'筒高',
			'鞋头款式',
			'跟高',
			'鞋跟款式',
			'闭合方式',
			'流行元素',
			'制作工艺',
			'图案',
			'适合季节',
		);

		$temSourceTaobaoIds = array();
		$keys = array(
			'女靴',
			//'靴子',
		);
		
		foreach($keys as $key)
		{
			for($i=50;$i<100;$i++)
			{
				$page = $i*44;
				$taobaoUrl = "http://s.taobao.com/search?sort=sale-desc&tab=all&q=$key&s=$page";
				$this->open("$taobaoUrl");
				for($j=1;$j<=44;$j++)
				{
					$temTBHref = $this->getAttribute("//div[@id='mainsrp-itemlist']/div/div/div/div[$j]/div[3]/a/@href");
					if(strpos($temTBHref,'http://item.taobao.com/item.htm') !== false)
					{
						preg_match('/id=[0-9]{10,12}/is', $temTBHref, $temTBId);
						$temTBIdNew = str_replace('id=','',$temTBId[0]);
						$temSourceTaobaoIds[] = $temTBIdNew;
					}
				}
			}
		
			//获取淘宝属性并存入数据库
			foreach($temSourceTaobaoIds as $temSourceTaobaoId)
			{
				$temResult = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$temSourceTaobaoId));
				if(!$temResult['taobao_source_taobao_id'])
				{
$js = <<<Eof
	var target=document.getElementById("lg");  
	var a=document.createElement("a");  
	a.id="myProduct"; 
	a.href="http://item.taobao.com/item.htm?id=$temSourceTaobaoId";
	a.innerHTML="Tem product";
	target.appendChild(a);  
Eof;
					$this->open("http://www.baidu.com/");
					$this->runScript($js);
					$this->click("//a [@id='myProduct']");
					$this->waitForElementPresent ("//div[@id='attributes']/ul");
					$taobaoSourceAttrsTem = array();
					$taobao_source_taobao_id = $temSourceTaobaoId;
					$xuetongneilicaizhi=$xuetongcaizhi=$shangshinianfenjijie=$fengge=$bangmiancaizhi=$xuemianneilicaizhi=$pizhitezhi=$xiedicaizhi=$xuekuanpingming=$tonggao=$xietongkuanshi=$genggao=$xiegengkuanshi=$bihefangshi=$liuxingyuansu=$zhizhuogongyi=$tuan=$shehejijie='等待修改';
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
								$taobaoSourceAttrsTem[] = $temAttrTitle . ':' . $temAttrValue;
								switch ($temAttrTitle)
								{
									case '靴筒内里材质':
										$xuetongneilicaizhi = $temAttrValue;
										break;  
									case '靴筒材质':
										$xuetongcaizhi = $temAttrValue;
										break;  							
									case '上市年份季节':
										$shangshinianfenjijie = $temAttrValue;
										break;  
									case '风格':
										$fengge = $temAttrValue;
										break;  
									case '帮面材质':
										$bangmiancaizhi = $temAttrValue;
										break;  
									case '鞋面内里材质':
										$xuemianneilicaizhi = $temAttrValue;
										break;  
									case '皮质特征':
										$pizhitezhi = $temAttrValue;
										break;  
									case '鞋底材质':
										$xiedicaizhi = $temAttrValue;
										break;  
									case '靴款品名':
										$xuekuanpingming = $temAttrValue;
										break;  
									case '筒高':
										$tonggao = $temAttrValue;
										break;  
									case '鞋头款式':
										$xietongkuanshi = $temAttrValue;
										break;  
									case '跟高':
										$genggao = $temAttrValue;
										break;  
									case '鞋跟款式':
										$xiegengkuanshi = $temAttrValue;
										break;  
									case '闭合方式':
										$bihefangshi = $temAttrValue;
										break;  
									case '流行元素':
										$liuxingyuansu = $temAttrValue;
										break;  
									case '制作工艺':
										$zhizhuogongyi = $temAttrValue;
										break;  
									case '图案':
										$tuan = $temAttrValue;
										break;  
									case '适合季节':
										$shehejijie = $temAttrValue;
										break; 
								}
							}
						}else
						{
							$i = 100;
						}
					}
					//把淘宝属性存入数据库
					$taobaoSource = new TaobaoSource();
					$taobaoSource->taobao_source_taobao_id = $taobao_source_taobao_id;
					$taobao_source_taobao_title = $this->getText("//div[@id='J_Title']/h3");
					$taobaoSource->taobao_source_taobao_title = $taobao_source_taobao_title;
					$taobaoSource->xuetongneilicaizhi = $xuetongneilicaizhi;
					$taobaoSource->xuetongcaizhi = $xuetongcaizhi;
					$taobaoSource->shangshinianfenjijie = $shangshinianfenjijie;
					$taobaoSource->fengge = $fengge;
					$taobaoSource->bangmiancaizhi = $bangmiancaizhi;
					$taobaoSource->xuemianneilicaizhi = $xuemianneilicaizhi;
					$taobaoSource->pizhitezhi = $pizhitezhi;
					$taobaoSource->xiedicaizhi = $xiedicaizhi;
					$taobaoSource->xuekuanpingming = $xuekuanpingming;
					$taobaoSource->tonggao = $tonggao;
					$taobaoSource->xietongkuanshi = $xietongkuanshi;
					$taobaoSource->genggao = $genggao;
					$taobaoSource->xiegengkuanshi = $xiegengkuanshi;
					$taobaoSource->bihefangshi = $bihefangshi;
					$taobaoSource->liuxingyuansu = $liuxingyuansu;
					$taobaoSource->zhizhuogongyi = $zhizhuogongyi;
					$taobaoSource->tuan = $tuan;
					$taobaoSource->shehejijie = $shehejijie;
					$taobaoSource->used = 0;
					$taobaoSource->key = $key;
					$taobaoSource->save();
					//file_put_contents("publish/reports/test.txt",$taobaoSourceAttrsTemString ."\n", FILE_APPEND);
				}
			}
		}
	}
}