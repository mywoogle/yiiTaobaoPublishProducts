<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
	
		$this->open("http://baidu.com");
		//http://bibo.go2.cn/c4-1-0.go
		$this->pause(180000);

		$this->open("http://bibo.go2.cn/c4-1-0.go");
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
			//include(detail.php);
			


			
			
			
			//$this->open("http://localhost/detail.html");
			//选择首图-
			for($i=1;$i<=5;$i++)
			{
				$this->click("//div[@id='imglist']/ul[1]/li[$i]/table/tbody/tr/td/img");
			}
			//选择上架时间-
			$this->click("//input[@value='instock']");
			//输入宝贝名称-
			$this->type("//input[@name='title']", "时尚女鞋");
			//选择运费模板
			//$this->select("//select[@id='postage_id']/option[@value='849596360']");
			$this->select("postage_id","value=1271450970");
			//选择颜色
			$colors = $this->getText("//ul[@id='shoesform']/li[26]/code");
			$colors = explode(";",$colors);
			for($j=1;$j<count($colors);$j++)
			{
				$this->click("//ul[@id='shoesform']/li[27]/ul/li[$j]/input");
				$this->type("//ul[@id='shoesform']/li[27]/ul/li[$j]/label/input", $colors[$j-1]);
			}
			//file_put_contents("tesList.data",$colors);
			//选择尺码
			$chicuns = $this->getText("//ul[@id='shoesform']/li[25]/code");
			$chicuns = explode(",",$chicuns);
			for($j=1;$j<=count($chicuns);$j++)
			{
				$tem = intval($chicuns[$j-1])-32;
				if($tem==1 || $tem>7){
					$this->click("//ul[@id='shoesform']/li[29]/ul/li[$tem]/input");
				}
			}
			//选择详情图片
			for($i=1;$i<=5;$i++)
			{
				$this->click("//div[@id='bbmslist']/b[$i]/table/tbody/tr/td/img");
			}
			//选择店铺分类
			$this->click("//dl[@class='seller_cat']/dd[1]/input");
			
			
			$this->pause(18000000000);


			
			
			
			
			
		}else
		{
			//$this->assertText("//dd[@id='productbtn']/a[1]");
		}
		$this->pause(10000);
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
		$this->pause(60000);
		/*
		
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
		//$this->pause(120000);
*/
		
	}
}
