<?php
class go2PublishTaobao extends WebTestCase
{
	public function testPublish()
	{
		$reportsName = 'publish/reports/MatchTitle/MatchTitle('.date('y-m-d H-i-s',time()).').txt';
		$targetResults = Target::model()->findAll('0<target_title_search<:target_title_search',array(':target_title_search'=>4));
		$total = count($targetResults);
		$totalModify = 0;
		foreach($targetResults as $targetResult)
		{
		
		
			$whereStrint =	
				'
					xuetongneilicaizhi=:xuetongneilicaizhi and
					xuetongcaizhi=:xuetongcaizhi and
					bangmiancaizhi=:bangmiancaizhi and
					xuemianneilicaizhi=:xuemianneilicaizhi and
					tonggao=:tonggao and
					xietongkuanshi=:xietongkuanshi and
					genggao=:genggao and
					xiegengkuanshi=:xiegengkuanshi
				';		
			
			if($targetResult['shangshinianfenjijie'] == '等待修改')
			{
				$whereStrint .= ' and shangshinianfenjijie!=:shangshinianfenjijie';
				$shangshinianfenjijie = '';
			}else{
				$whereStrint .= ' and shangshinianfenjijie=:shangshinianfenjijie';
				$shangshinianfenjijie = $targetResult['shangshinianfenjijie'];
			}
			
			if($targetResult['fengge'] == '等待修改')
			{
				$whereStrint .= ' and fengge!=:fengge';
				$fengge = '';
			}else{
				$whereStrint .= ' and fengge=:fengge';
				$fengge = $targetResult['fengge'];
			}
			
			if($targetResult['pizhitezhi'] == '等待修改')
			{
				$whereStrint .= ' and pizhitezhi!=:pizhitezhi';
				$pizhitezhi = '';
			}else{
				$whereStrint .= ' and pizhitezhi=:pizhitezhi';
				$pizhitezhi = $targetResult['pizhitezhi'];
			}
			
			if($targetResult['xiedicaizhi'] == '等待修改')
			{
				$whereStrint .= ' and xiedicaizhi!=:xiedicaizhi';
				$xiedicaizhi = '';
			}else{
				$whereStrint .= ' and xiedicaizhi=:xiedicaizhi';
				$xiedicaizhi = $targetResult['xiedicaizhi'];
			}
			
			if($targetResult['xuekuanpingming'] == '等待修改')
			{
				$whereStrint .= ' and xuekuanpingming!=:xuekuanpingming';
				$xuekuanpingming = '';
			}else{
				$whereStrint .= ' and xuekuanpingming=:xuekuanpingming';
				$xuekuanpingming = $targetResult['xuekuanpingming'];
			}

			if($targetResult['bihefangshi'] == '等待修改')
			{
				$whereStrint .= ' and bihefangshi!=:bihefangshi';
				$bihefangshi = '';
			}else{
				$whereStrint .= ' and bihefangshi=:bihefangshi';
				$bihefangshi = $targetResult['bihefangshi'];
			}
			
			if($targetResult['liuxingyuansu'] == '等待修改')
			{
				$whereStrint .= ' and liuxingyuansu!=:liuxingyuansu';
				$liuxingyuansu = '';
			}else{
				$whereStrint .= ' and liuxingyuansu=:liuxingyuansu';
				$liuxingyuansu = $targetResult['liuxingyuansu'];
			}
			
			if($targetResult['zhizhuogongyi'] == '等待修改')
			{
				$whereStrint .= ' and zhizhuogongyi!=:zhizhuogongyi';
				$zhizhuogongyi = '';
			}else{
				$whereStrint .= ' and zhizhuogongyi=:zhizhuogongyi';
				$zhizhuogongyi = $targetResult['zhizhuogongyi'];
			}
			
			if($targetResult['tuan'] == '等待修改')
			{
				$whereStrint .= ' and tuan!=:tuan';
				$tuan = '';
			}else{
				$whereStrint .= ' and tuan=:tuan';
				$tuan = $targetResult['tuan'];
			}
			
			if($targetResult['shehejijie'] == '等待修改')
			{
				$whereStrint .= ' and shehejijie!=:shehejijie';
				$shehejijie = '';
			}else{
				$whereStrint .= ' and shehejijie=:shehejijie';
				$shehejijie = $targetResult['shehejijie'];
			}
			
			//file_put_contents("$reportsName",$whereStrint."\n", FILE_APPEND);
			//get all match TaobaoSource
			$TaobaoSources = TaobaoSource::model()->findAll(
				$whereStrint
				,
				array(
					':xuetongneilicaizhi'=>$targetResult['xuetongneilicaizhi'],
					':xuetongcaizhi'=>$targetResult['xuetongcaizhi'],
					':bangmiancaizhi'=>$targetResult['bangmiancaizhi'],
					':tonggao'=>$targetResult['tonggao'],
					':xuemianneilicaizhi'=>$targetResult['xuemianneilicaizhi'],
					':xietongkuanshi'=>$targetResult['xietongkuanshi'],
					':genggao'=>$targetResult['genggao'],
					':xiegengkuanshi'=>$targetResult['xiegengkuanshi'],
					':shangshinianfenjijie'=>$shangshinianfenjijie,
					':fengge'=>$fengge,
					':pizhitezhi'=>$pizhitezhi,
					':xiedicaizhi'=>$xiedicaizhi,
					':xuekuanpingming'=>$xuekuanpingming,
					':bihefangshi'=>$bihefangshi,
					':liuxingyuansu'=>$liuxingyuansu,
					':zhizhuogongyi'=>$zhizhuogongyi,
					':tuan'=>$tuan,
					':shehejijie'=>$shehejijie,
				)
			);

			//modify the Target and TaobaoSource
			$count = count($TaobaoSources);
			
				//modify the Target
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
				$flagFrom = intval($temResult->target_title_search);
				$flagEnd = 0;
				if($count >= 3)
				{
					$flagEnd = 4-$flagFrom;
				}elseif($count == 2)
				{
					$flagEnd = 4-$flagFrom <= 2 ? :2;
				}elseif($count == 1)
				{
					$flagEnd = 4-$flagFrom <= 1 ? :1;
				}
				
				if($count>0)$totalModify++;
				
				file_put_contents("$reportsName",$targetResult['target_taobao_id'] ."---正在修改标题", FILE_APPEND);
				
				for($i = 0; $i < $flagEnd; $i++) 
				{
					//modify the TaobaoSource
					$temResult->target_title_search = $flagFrom + 1;
					switch($flagFrom)
					{
						case 1;
							$temResult->target_taobao_title1 = $TaobaoSources[$i]->taobao_source_taobao_title;
							$temResult->source_taobao_id1 = $TaobaoSources[$i]->taobao_source_taobao_id;
							$temResult->source_taobao_keyword1 = $TaobaoSources[$i]->key;
							break;
						case 2;
							$temResult->target_taobao_title2 = $TaobaoSources[$i]->taobao_source_taobao_title;
							$temResult->source_taobao_id2 = $TaobaoSources[$i]->taobao_source_taobao_id;
							$temResult->source_taobao_keyword2 = $TaobaoSources[$i]->key;
							break;
						case 3;
							$temResult->target_taobao_title3 = $TaobaoSources[$i]->taobao_source_taobao_title;
							$temResult->source_taobao_id3 = $TaobaoSources[$i]->taobao_source_taobao_id;
							$temResult->source_taobao_keyword3 = $TaobaoSources[$i]->key;
							break;
					}
					$flagFrom++;
					$temResult->save();
					//modify the TaobaoSource
					$TaobaoSourceTem = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[$i]->taobao_source_taobao_id));
					$TaobaoSourceTem->used = 1;
					$TaobaoSourceTem->save();
					$flag = $flagFrom - 1;
					file_put_contents("$reportsName",$flag.'、', FILE_APPEND);
				}
				file_put_contents("$reportsName","\n", FILE_APPEND);
		}
		file_put_contents("$reportsName","------------------修改: $totalModify / 总共: $total ------------------", FILE_APPEND);
	}
}