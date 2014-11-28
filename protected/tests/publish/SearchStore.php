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
		 
		$sql = "SELECT `target_taobao_id` FROM `target` ORDER BY `target_id` DESC";
		$TargetIds = Yii::app()->db->createCommand($sql)->queryColumn();  
		//file_put_contents("publish/reports/test.txt",implode("\n", $TargetIds) ."\n", FILE_APPEND);
		
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
										$xuetongneilicaizhi = $temAttrValue?:'等待修改';
										break;  
									case '靴筒材质':
										$xuetongcaizhi = $temAttrValue?:'等待修改';
										break;  							
									case '上市年份季节':
										$shangshinianfenjijie = $temAttrValue?:'等待修改';
										break;  
									case '风格':
										$fengge = $temAttrValue?:'等待修改';
										break;  
									case '帮面材质':
										$bangmiancaizhi = $temAttrValue?:'等待修改';
										break;  
									case '鞋面内里材质':
										$xuemianneilicaizhi = $temAttrValue?:'等待修改';
										break;  
									case '皮质特征':
										$pizhitezhi = $temAttrValue?:'等待修改';
										break;  
									case '鞋底材质':
										$xiedicaizhi = $temAttrValue?:'等待修改';
										break;  
									case '靴款品名':
										$xuekuanpingming = $temAttrValue?:'等待修改';
										break;  
									case '筒高':
										$tonggao = $temAttrValue?:'等待修改';
										break;  
									case '鞋头款式':
										$xietongkuanshi = $temAttrValue?:'等待修改';
										break;  
									case '跟高':
										$genggao = $temAttrValue?:'等待修改';
										break;  
									case '鞋跟款式':
										$xiegengkuanshi = $temAttrValue?:'等待修改';
										break;  
									case '闭合方式':
										$bihefangshi = $temAttrValue?:'等待修改';
										break;  
									case '流行元素':
										$liuxingyuansu = $temAttrValue?:'等待修改';
										break;  
									case '制作工艺':
										$zhizhuogongyi = $temAttrValue?:'等待修改';
										break;  
									case '图案':
										$tuan = $temAttrValue?:'等待修改';
										break;  
									case '适合季节':
										$shehejijie = $temAttrValue?:'等待修改';
										break; 
								}
							}
						}else
						{
							$i = 100;
						}
					}
					
					//把淘宝属性存入数据库
					$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$TargetId));
					$temResult->xuetongneilicaizhi = $xuetongneilicaizhi;
					$temResult->xuetongcaizhi = $xuetongcaizhi;
					$temResult->shangshinianfenjijie = $shangshinianfenjijie;
					$temResult->fengge = $fengge;
					$temResult->bangmiancaizhi = $bangmiancaizhi;
					$temResult->xuemianneilicaizhi = $xuemianneilicaizhi;
					$temResult->pizhitezhi = $pizhitezhi;
					$temResult->xiedicaizhi = $xiedicaizhi;
					$temResult->xuekuanpingming = $xuekuanpingming;
					$temResult->tonggao = $tonggao;
					$temResult->xietongkuanshi = $xietongkuanshi;
					$temResult->genggao = $genggao;
					$temResult->xiegengkuanshi = $xiegengkuanshi;
					$temResult->bihefangshi = $bihefangshi;
					$temResult->liuxingyuansu = $liuxingyuansu;
					$temResult->zhizhuogongyi = $zhizhuogongyi;
					$temResult->tuan = $tuan;
					$temResult->shehejijie = $shehejijie;
					$temResult->save();
					//file_put_contents("publish/reports/test.txt",$temResult['xuetongcaizhi'] ."\n", FILE_APPEND);
			}
	}
}