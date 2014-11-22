<?php
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
