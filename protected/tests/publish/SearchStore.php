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
			'靴子',
		);
		
		$connection = Yii::app()->db;  
		$sql = "SELECT `target_taobao_id` FROM `target` ORDER BY `target_id` DESC";
		$command = $connection->createCommand($sql);  
		$TargetIds = $command->queryColumn();  
		file_put_contents("publish/reports/test.txt",implode("\n", $TargetIds) ."\n", FILE_APPEND);
		
			//获取淘宝属性并存入数据库
			foreach($TargetIds as $TargetId)
			{
$js = <<<Eof
	var target=document.getElementById("lg");  
	var a=document.createElement("a");  
	a.id="myProduct"; 
	a.href="http://item.taobao.com/item.htm?id=$TargetId";
	a.innerHTML="Tem product";
	target.appendChild(a);  
Eof;
					$this->open("http://www.baidu.com/");
					$this->runScript($js);
					$this->click("//a [@id='myProduct']");
					$this->waitForElementPresent ("//div[@id='attributes']/ul");
					//$taobaoSourceAttrsTem = array();
					//$taobao_source_taobao_id = $temSourceTaobaoId;
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
								//$taobaoSourceAttrsTem[] = $temAttrTitle . ':' . $temAttrValue;
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
					Target::model()->updateAll(
						array(
							'target_taobao_id'=>$TargetId
						),
						'
						xuetongneilicaizhi=:xuetongneilicaizhi,
						xuetongcaizhi=:xuetongcaizhi,
						shangshinianfenjijie=:shangshinianfenjijie,
						fengge=:fengge,
						bangmiancaizhi=:bangmiancaizhi,
						xuemianneilicaizhi=:xuemianneilicaizhi,
						pizhitezhi=:pizhitezhi,
						xiedicaizhi=:xiedicaizhi,
						xuekuanpingming=:xuekuanpingming,
						tonggao=:tonggao,
						xietongkuanshi=:xietongkuanshi,
						genggao=:genggao,
						xiegengkuanshi=:xiegengkuanshi,
						bihefangshi=:bihefangshi,
						liuxingyuansu=:liuxingyuansu,
						zhizhuogongyi=:zhizhuogongyi,
						tuan=:tuan,
						shehejijie=:shehejijie,
						target_title_search=:target_title_search
						',
						array(
							':xuetongneilicaizhi'=>$xuetongneilicaizhi,
							':xuetongcaizhi'=>$xuetongcaizhi,
							':shangshinianfenjijie'=>$shangshinianfenjijie,
							':fengge'=>$fengge,
							':bangmiancaizhi'=>$bangmiancaizhi,
							':xuemianneilicaizhi'=>$xuemianneilicaizhi,
							':pizhitezhi'=>$pizhitezhi,
							':xiedicaizhi'=>$xiedicaizhi,
							':xuekuanpingming'=>$xuekuanpingming,
							':tonggao'=>$tonggao,
							':xietongkuanshi'=>$xietongkuanshi,
							':genggao'=>$genggao,
							':xiegengkuanshi'=>$xiegengkuanshi,
							':bihefangshi'=>$bihefangshi,
							':liuxingyuansu'=>$liuxingyuansu,
							':zhizhuogongyi'=>$zhizhuogongyi,
							':tuan'=>$tuan,
							':shehejijie'=>$shehejijie,
							':target_title_search'=> 1
						)
					);

					file_put_contents("publish/reports/test.txt",'+++++++++++++++' ."\n", FILE_APPEND);
				
			
			}
	}
}