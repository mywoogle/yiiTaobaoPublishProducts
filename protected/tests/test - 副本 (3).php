<?php
class newTest extends WebTestCase
{

	public function testList()
	{
		$this->open("http://jinlan.go2.cn/c4-1-0.go");
		//$this->open("http://lly.go2.cn/c4-1-0.go");
		$element = "//ul[@id='products']/li[1]/strong/a/@href";
		$href = $this->getAttribute($element);
		$this->open($href);
		$new_href = $this->getAttribute("//dd[@id='productbtn']/a[1]/@href");
		$new_text = $this->getText("//dd[@id='productbtn']/a[1]");
		///product/publish/oacage
		$new_href = 'http://www.go2.cn'.$new_href;
		if($new_text == "发布到淘宝")
		{
			$this->open($new_href);
			//$this->Echo('it is working!');
			//$this->getAlert();
		}else
		{
			$this->assertText("//dd[@id='productbtn']/a[1]");
		}
		$this->pause(120000);
		//file_put_contents("tesList.data",$href);
		
		
		
		$this->open("http://jinlan.go2.cn/c4-1-0.go");
		//$this->open("http://lly.go2.cn/c4-1-0.go");
		$element = "//ul[@id='products']/li[1]/strong/a/@href";
		$href = $this->getAttribute($element);
		$this->open($href);
		$new_href = $this->getAttribute("//dd[@id='productbtn']/a[1]/@href");
		$new_text = $this->getText("//dd[@id='productbtn']/a[1]");
		///product/publish/oacage
		$new_href = 'http://www.go2.cn'.$new_href;
		if($new_text == "发布到淘宝")
		{
			$this->open($new_href);
			//$this->Echo('it is working!');
			//$this->getAlert();
		}else
		{
			$this->assertText("//dd[@id='productbtn']/a[1]");
		}
		$this->pause(120000);
		
		
				$this->open("http://jinlan.go2.cn/c4-1-0.go");
		//$this->open("http://lly.go2.cn/c4-1-0.go");
		$element = "//ul[@id='products']/li[1]/strong/a/@href";
		$href = $this->getAttribute($element);
		$this->open($href);
		$new_href = $this->getAttribute("//dd[@id='productbtn']/a[1]/@href");
		$new_text = $this->getText("//dd[@id='productbtn']/a[1]");
		///product/publish/oacage
		$new_href = 'http://www.go2.cn'.$new_href;
		if($new_text == "发布到淘宝")
		{
			$this->open($new_href);
			//$this->Echo('it is working!');
			//$this->getAlert();
		}else
		{
			$this->assertText("//dd[@id='productbtn']/a[1]");
		}
		$this->pause(120000);
		
		
	}
}
