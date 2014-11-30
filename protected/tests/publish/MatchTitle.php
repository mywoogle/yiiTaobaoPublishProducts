<?php
class go2PublishTaobao extends WebTestCase
{
	public function testPublish()
	{
		$targetResults = Target::model()->findAll('0<target_title_search<=:target_title_search',array(':target_title_search'=>4));
		foreach($targetResults as $targetResult)
		{
			//file_put_contents("publish/reports/test.txt",$targetResult['target_taobao_id'] ."\n", FILE_APPEND);
			$TaobaoSources = TaobaoSource::model()->findAll(
				'
					
					
					
					
					
					
					
					
					
					xuetongneilicaizhi=:xuetongneilicaizhi and
					xuetongcaizhi=:xuetongcaizhi and
					shangshinianfenjijie=:shangshinianfenjijie and
					fengge=:fengge and
					bangmiancaizhi=:bangmiancaizhi and
					xuemianneilicaizhi=:xuemianneilicaizhi and
					pizhitezhi=:pizhitezhi and
					xiedicaizhi=:xiedicaizhi and
					xuekuanpingming=:xuekuanpingming

				',
				/*
					tonggao=:tonggao and
					xietongkuanshi=:xietongkuanshi and
					genggao=:genggao and
					xiegengkuanshi=:xiegengkuanshi and
					bihefangshi=:bihefangshi and
					liuxingyuansu=:liuxingyuansu and
					zhizhuogongyi=:zhizhuogongyi and
					tuan=:tuan and
					shehejijie=:shehejijie
				*/
				array(
					':xuetongneilicaizhi'=>$targetResult['xuetongneilicaizhi'],
					':xuetongcaizhi'=>$targetResult['xuetongcaizhi'],
					':shangshinianfenjijie'=>$targetResult['shangshinianfenjijie'],
					':fengge'=>$targetResult['fengge'],
					':bangmiancaizhi'=>$targetResult['bangmiancaizhi'],
					':xuemianneilicaizhi'=>$targetResult['xuemianneilicaizhi'],
					':pizhitezhi'=>$targetResult['pizhitezhi'],
					':xiedicaizhi'=>$targetResult['xiedicaizhi'],
					':xuekuanpingming'=>$targetResult['xuekuanpingming'],
					/*
					':tonggao'=>$targetResult['tonggao'],
					':xietongkuanshi'=>$targetResult['xietongkuanshi'],
					':genggao'=>$targetResult['genggao'],
					':xiegengkuanshi'=>$targetResult['xiegengkuanshi'],
					':bihefangshi'=>$targetResult['bihefangshi'],
					':liuxingyuansu'=>$targetResult['liuxingyuansu'],
					':zhizhuogongyi'=>$targetResult['zhizhuogongyi'],
					':tuan'=>$targetResult['tuan'],
					':shehejijie'=>$targetResult['shehejijie'],
					*/
				)
			);
			
			$count = count($TaobaoSources);
			if($count >= 3)
			{
					$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
					$temResult->target_title_search = 4;
					$temResult->target_taobao_title1 = $TaobaoSources[0]['taobao_source_taobao_title'];
					$temResult->target_taobao_title2 = $TaobaoSources[1]['taobao_source_taobao_title'];
					$temResult->target_taobao_title3 = $TaobaoSources[2]['taobao_source_taobao_title'];
					$temResult->source_taobao_id1 = $TaobaoSources[0]['taobao_source_taobao_id'];
					$temResult->source_taobao_id2 = $TaobaoSources[1]['taobao_source_taobao_id'];
					$temResult->source_taobao_id3 = $TaobaoSources[2]['taobao_source_taobao_id'];
					$temResult->source_taobao_keyword1 = $TaobaoSources[0]['key'];
					$temResult->source_taobao_keyword2 = $TaobaoSources[1]['key'];
					$temResult->source_taobao_keyword3 = $TaobaoSources[2]['key'];
					$temResult->save();
					
					$TaobaoSource0 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[0]['taobao_source_taobao_id']));
					$TaobaoSource0->used = 1;
					$TaobaoSource0->save();
					$TaobaoSource1 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[1]['taobao_source_taobao_id']));
					$TaobaoSource1->used = 1;
					$TaobaoSource1->save();
					$TaobaoSource2 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[2]['taobao_source_taobao_id']));
					$TaobaoSource2->used = 1;
					$TaobaoSource2->save();
			}elseif($count = 2)
			{
					$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
					$temResult->target_title_search = 3;
					$temResult->target_taobao_title1 = $TaobaoSources[0]['taobao_source_taobao_title'];
					$temResult->target_taobao_title2 = $TaobaoSources[1]['taobao_source_taobao_title'];
					$temResult->source_taobao_id1 = $TaobaoSources[0]['taobao_source_taobao_id'];
					$temResult->source_taobao_id2 = $TaobaoSources[1]['taobao_source_taobao_id'];
					$temResult->source_taobao_keyword1 = $TaobaoSources[0]['key'];
					$temResult->source_taobao_keyword2 = $TaobaoSources[1]['key'];
					$temResult->save();
					
					$TaobaoSource0 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[0]['taobao_source_taobao_id']));
					$TaobaoSource0->used = 1;
					$TaobaoSource0->save();
					$TaobaoSource1 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[1]['taobao_source_taobao_id']));
					$TaobaoSource1->used = 1;
					$TaobaoSource1->save();
			}elseif($count = 1)
			{
					$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$targetResult['target_taobao_id']));
					$temResult->target_title_search = 2;
					$temResult->target_taobao_title1 = $TaobaoSources[0]['taobao_source_taobao_title'];
					$temResult->source_taobao_id1 = $TaobaoSources[0]['taobao_source_taobao_id'];
					$temResult->source_taobao_keyword1 = $TaobaoSources[0]['key'];
					$temResult->save();
					
					$TaobaoSource0 = TaobaoSource::model()->find('taobao_source_taobao_id=:taobao_source_taobao_id',array(':taobao_source_taobao_id'=>$TaobaoSources[0]['taobao_source_taobao_id']));
					$TaobaoSource0->used = 1;
					$TaobaoSource0->save();
			}
				
			foreach($TaobaoSources as $TaobaoSource)
			{
				file_put_contents("publish/reports/test.txt",$TaobaoSource['taobao_source_taobao_id'] ."\n", FILE_APPEND);
				//$this->pause(3000000000);
				

				
			}
			file_put_contents("publish/reports/test.txt","----------------------" ."\n", FILE_APPEND);
		}
		
		
		
		/*
		if(!$temResult['taobao_source_taobao_id'])
		{
		
		}
		*/
	}
}