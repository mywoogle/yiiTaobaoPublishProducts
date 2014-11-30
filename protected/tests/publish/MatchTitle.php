<?php
class go2PublishTaobao extends WebTestCase
{
	public function testPublish()
	{
		$reportsName = 'publish/reports/MatchTitle/MatchTitle('.date('y-m-d H-i-s',time()).').txt';
		$targetResults = Target::model()->findAll('0<target_title_search<=:target_title_search',array(':target_title_search'=>4));
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
/*
			if($targetResult['shangshinianfenjijie'] == '等待修改')
			{
				$whereStrint .= ' and shangshinianfenjijie!=:shangshinianfenjijie and ';
				$shangshinianfenjijie = '';
			}else{
				$whereStrint .= ' and shangshinianfenjijie=:shangshinianfenjijie and ';
				$shangshinianfenjijie = $targetResult['shangshinianfenjijie'];
			}
			
			if($targetResult['fengge'] == '等待修改')
			{
				$whereStrint .= 'fengge!=:fengge and ';
				$fengge = '';
			}else{
				$whereStrint .= 'fengge=:fengge and ';
				$fengge = $targetResult['fengge'];
			}
			
			if($targetResult['pizhitezhi'] == '等待修改')
			{
				$whereStrint .= 'pizhitezhi!=:pizhitezhi and ';
				$pizhitezhi = '';
			}else{
				$whereStrint .= 'pizhitezhi=:pizhitezhi and ';
				$pizhitezhi = $targetResult['pizhitezhi'];
			}
			
			if($targetResult['xiedicaizhi'] == '等待修改')
			{
				$whereStrint .= 'xiedicaizhi!=:xiedicaizhi and ';
				$xiedicaizhi = '';
			}else{
				$whereStrint .= 'xiedicaizhi=:xiedicaizhi and ';
				$xiedicaizhi = $targetResult['xiedicaizhi'];
			}
			
			if($targetResult['xuekuanpingming'] == '等待修改')
			{
				$whereStrint .= 'xuekuanpingming!=:xuekuanpingming and ';
				$xuekuanpingming = '';
			}else{
				$whereStrint .= 'xuekuanpingming=:xuekuanpingming and ';
				$xuekuanpingming = $targetResult['xuekuanpingming'];
			}

			if($targetResult['bihefangshi'] == '等待修改')
			{
				$whereStrint .= 'bihefangshi!=:bihefangshi and ';
				$bihefangshi = '';
			}else{
				$whereStrint .= 'bihefangshi=:bihefangshi and ';
				$bihefangshi = $targetResult['bihefangshi'];
			}
			
			if($targetResult['liuxingyuansu'] == '等待修改')
			{
				$whereStrint .= 'liuxingyuansu!=:liuxingyuansu and ';
				$liuxingyuansu = '';
			}else{
				$whereStrint .= 'liuxingyuansu=:liuxingyuansu and ';
				$liuxingyuansu = $targetResult['liuxingyuansu'];
			}
			
			if($targetResult['zhizhuogongyi'] == '等待修改')
			{
				$whereStrint .= 'zhizhuogongyi!=:zhizhuogongyi and ';
				$zhizhuogongyi = '';
			}else{
				$whereStrint .= 'zhizhuogongyi=:zhizhuogongyi and ';
				$zhizhuogongyi = $targetResult['zhizhuogongyi'];
			}
			
			if($targetResult['tuan'] == '等待修改')
			{
				$whereStrint .= 'tuan!=:tuan and ';
				$tuan = '';
			}else{
				$whereStrint .= 'tuan=:tuan and';
				$tuan = $targetResult['tuan'];
			}
			
			if($targetResult['shehejijie'] == '等待修改')
			{
				$whereStrint .= 'shehejijie!=:shehejijie';
				$shehejijie = '';
			}else{
				$whereStrint .= 'shehejijie=:shehejijie';
				$shehejijie = $targetResult['shehejijie'];
			}
			*/
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
					/*
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
					*/
				)
			);

			//modify the Target and TaobaoSource
			$count = count($TaobaoSources);
			if($count >= 3)
			{
				//modify the Target
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
				$temResult->target_title_search = 4;
				$temResult->target_taobao_title1 = $TaobaoSources[0]->taobao_source_taobao_title;
				$temResult->target_taobao_title2 = $TaobaoSources[1]->taobao_source_taobao_title;
				$temResult->target_taobao_title3 = $TaobaoSources[2]->taobao_source_taobao_title;
				$temResult->source_taobao_id1 = $TaobaoSources[0]->taobao_source_taobao_id;
				$temResult->source_taobao_id2 = $TaobaoSources[1]->taobao_source_taobao_id;
				$temResult->source_taobao_id3 = $TaobaoSources[2]->taobao_source_taobao_id;
				$temResult->source_taobao_keyword1 = $TaobaoSources[0]->key;
				$temResult->source_taobao_keyword2 = $TaobaoSources[1]->key;
				$temResult->source_taobao_keyword3 = $TaobaoSources[2]->key;
				//$temResult->save();
				file_put_contents("$reportsName",$targetResult['target_taobao_id'] ."---被修改了 3 个标题\n", FILE_APPEND);
				//modify the TaobaoSource
				$TaobaoSource0 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[0]->taobao_source_taobao_id));
				$TaobaoSource0->used = 1;
				//$TaobaoSource0->save();
				$TaobaoSource1 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[1]->taobao_source_taobao_id));
				$TaobaoSource1->used = 1;
				//$TaobaoSource1->save();
				$TaobaoSource2 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[2]->taobao_source_taobao_id));
				$TaobaoSource2->used = 1;
				//$TaobaoSource2->save();
			}elseif($count == 2)
			{
				//modify the Target
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
				$temResult->target_title_search = 3;
				$temResult->target_taobao_title1 = $TaobaoSources[0]->taobao_source_taobao_title;
				$temResult->target_taobao_title2 = $TaobaoSources[1]->taobao_source_taobao_title;
				$temResult->source_taobao_id1 = $TaobaoSources[0]->taobao_source_taobao_id;
				$temResult->source_taobao_id2 = $TaobaoSources[1]->taobao_source_taobao_id;
				$temResult->source_taobao_keyword1 = $TaobaoSources[0]->key;
				$temResult->source_taobao_keyword2 = $TaobaoSources[1]->key;
				//$temResult->save();
				file_put_contents("$reportsName",$targetResult['target_taobao_id'] ."---被修改了 $count 个标题\n", FILE_APPEND);
				//modify the TaobaoSource
				$TaobaoSource0 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[0]->taobao_source_taobao_id));
				$TaobaoSource0->used = 1;
				//$TaobaoSource0->save();
				$TaobaoSource1 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[1]->taobao_source_taobao_id));
				$TaobaoSource1->used = 1;
				//$TaobaoSource1->save();
			}elseif($count == 1)
			{
				//modify the Target
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
				$temResult->target_title_search = 2;
				$temResult->target_taobao_title1 = $TaobaoSources[0]->taobao_source_taobao_title;
				$temResult->source_taobao_id1 = $TaobaoSources[0]->taobao_source_taobao_id;
				$temResult->source_taobao_keyword1 = $TaobaoSources[0]->key;
				//$temResult->save();
				file_put_contents("$reportsName",$targetResult['target_taobao_id'] ."---被修改了 $count 个标题\n", FILE_APPEND);
				//modify the TaobaoSource
				$TaobaoSource0 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[0]->taobao_source_taobao_id));
				$TaobaoSource0->used = 1;
				//$TaobaoSource0->save();
			}
		}
	}
}