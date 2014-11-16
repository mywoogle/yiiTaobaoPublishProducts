<?php
class newTest extends WebTestCase
{
	public function testIndex()
	{
		$this->open("http://baidu.com");
		//http://bibo.go2.cn/c4-1-0.go
		//$this->pause(180000);
		include_once("publish_control.php");
	}
}
