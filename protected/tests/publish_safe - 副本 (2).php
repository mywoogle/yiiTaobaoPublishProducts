<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		$this->open("http://www.go2.cn/user/login");
		//http://www.go2.cn/product/publish/oakgio
		//$this->type("//input[@id='username']", 'woogle111');
		//$this->type("//input[@id='password']", 'woogle735');
		//$this->pause(180000);
		//include_once('publish_publish.php');
		//$this->click("//input[@class='login_button']");
		//$this->pause(1800000000);
		//http://www.go2.cn/product/publish/ocgqmk
		//cmd=getNewBrowserSession&1=*iexplore&2=http://www.google.com
		//verifyElementPresent();
		//chrome://src/content/RemoteRunner.html?sessionId=ed4b4249d7c745dd9c8cc56acb8e031e&multiWindow=true&baseUrl=http%3A%2F%2Flocalhost%2Fblog%2Findex-test.php%2F&debugMode=false&driverUrl=http://localhost:4444/selenium-server/driver/
		for($i=1; ; )
		{
			if($this->verifyElementPresent("//input[@id='csvbutton']"))
			{
				break;
			}
			$this->pause(1000);
		}
	}
}
