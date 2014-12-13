<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//----------------------------login start------------------------------------------
		$init_url = 'http://www.go2.cn/product/publish/cicsq';
		
		$this->open("$init_url");
		$this->click("//div[@id='fast_login111']/div/a/div");
		//----------------------------chang jia loop,end.------------------------------------------
	}
}