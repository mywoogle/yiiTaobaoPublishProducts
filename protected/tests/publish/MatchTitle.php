<?php
class go2PublishTaobao extends WebTestCase
{
	public function testPublish()
	{
		$targetResults = Target::model()->findAll('target_title_search=:target_title_search',array(':target_title_search'=>1));
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
					xuekuanpingming=:xuekuanpingming and
					tonggao=:tonggao and
					xietongkuanshi=:xietongkuanshi and
					genggao=:genggao and
					xiegengkuanshi=:xiegengkuanshi and
					bihefangshi=:bihefangshi and
					liuxingyuansu=:liuxingyuansu and
					zhizhuogongyi=:zhizhuogongyi and
					tuan=:tuan and
					shehejijie=:shehejijie
				',
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
					':tonggao'=>$targetResult['tonggao'],
					':xietongkuanshi'=>$targetResult['xietongkuanshi'],
					':genggao'=>$targetResult['genggao'],
					':xiegengkuanshi'=>$targetResult['xiegengkuanshi'],
					':bihefangshi'=>$targetResult['bihefangshi'],
					':liuxingyuansu'=>$targetResult['liuxingyuansu'],
					':zhizhuogongyi'=>$targetResult['zhizhuogongyi'],
					':tuan'=>$targetResult['tuan'],
					':shehejijie'=>$targetResult['shehejijie'],
				)
			);
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