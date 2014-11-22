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
		foreach ($taobaoIds as $taobaoId){  
            $taobaoIdsNew[] = $taobaoId['target_taobao_id'];  
		}
		//print_r($taobaoIds);
		//$this->pause(50000);
		file_put_contents("publish/reports/test.txt",$taobaoIdsNew);
		/*
		$this->open("http://eapi.ximgs.net/oauth/taobao/post/25142?up=4&index=1&num_iid=42538209807&url=www.go2.cn");
		//$this->pause(5000);
		$js = 'window.location.search';
		//$js = 'location.search';
		$tem = $this->getEval($js);
		$tem = explode('&num_iid=', $tem );
		$tem = $tem[1];
		$tem = explode('&url=', $tem );
		$tem = $tem[0];
		file_put_contents("publish/reports/test.txt",$tem);
		*/
	}
}
/*
class newTest extends WebTestCase
{
	public function testSet()
	{
		$this->open("http://eapi.ximgs.net/oauth/taobao/post/25142?up=4&index=1&num_iid=42538209807&url=www.go2.cn");
		//$this->pause(5000);
		$js = 'window.location.search';
		//$js = 'location.search';
		$tem = $this->getEval($js);
		$tem = explode('&num_iid=', $tem );
		$tem = $tem[1];
		$tem = explode('&url=', $tem );
		$tem = $tem[0];
		file_put_contents("publish/reports/test.txt",$tem);
	}
}

$tem = '春兰鞋业-2237791&168-abc-123';
$tem_end = preg_replace("/-[0-9]{5,12}&/is", "&", $tem); 
echo $tem_end;
*/
