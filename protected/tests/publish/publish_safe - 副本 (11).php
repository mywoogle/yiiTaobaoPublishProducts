<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		$this->open("http://www.go2.cn/product/publish/cicsq");
		
		while(true)
		{
			if($this->isElementPresent("//input [@id='csvbutton']"))
			{
				break;
			}
			$currentPathname = $this->getEval("window.location.pathname");
			$currentUrl = $this->getEval("window.location.href");
			if($currentPathname != '/oauth/taobao/publish')
			{
				$currentUrl = 'http://www.go2.cn/product/publish/cicsq';
			}
			$this->open($currentUrl);
			//file_put_contents("tesList.data",$currentPathname);
			$this->pause(10000);
		}
		//$this->open("http://www.baidu.com");
		//this->pause(120000);
		
		//----------------------------login end------------------------------------------
		
		$productsList = array();
		//http://jinlan.go2.cn/c4-1-0.go
		//http://cxl.go2.cn/c4-1-0.go
		$this->open("http://cxl.go2.cn/c4-1-0.go");
		
		$productsCount = 0;
		for($i=1; ;$i++)
		{
			if($this->isElementPresent("//ul[@id='products']/li[$i]"))
			{
				$productsCount++;
			}else{
				break;
			}
		}

		for($i=1;$i<=$productsCount;$i++)
		{
			$tem_Product = $this->getAttribute("//ul[@id='products']/li[$i]/strong/a/@href");
			//http://www.go2.cn/product/publish/ociics
			$productsList[] = $tem_Product;
			/*
			$tem_Product = str_replace('product', 'product/publish', $tem_Product);
			$tem_Product = explode('.go?', $tem_Product );
			$tem_Product = $tem_Product[0];
			$productsPublish[] = $tem_Product;
			*/
		}
		foreach($productsList as $product)
		{
			$temProduct = str_replace('product', 'product/publish', $product);
			$temProduct = explode('.go?', $temProduct);
			$temPublish = $temProduct[0];
			//$this->open($temPublish);
			
			//$this->pause(100000000000000000000000);
			$this->open($product);
			//判断是否已经发布过了
			$new_text = $this->getText("//dd[@id='productbtn']/a[1]");
			$new_required = $this->isElementPresent("//ul[@id='propsul']/li[1]");
			if(($new_text == "发布到淘宝") && $new_required)
			{
				$this->open($temPublish);
			
				//----------------------------detail start------------------------------------------
				//判断必填属性
				
				//选择首图-
				$shouTuCount = 0;
				for($i=1; ;$i++)
				{
					if($this->isElementPresent("//div[@id='imglist']/ul[1]/li[$i]"))
					{
						$shouTuCount++;
					}else{
						break;
					}
				}
				if($shouTuCount >5)$shouTuCount = 5;
				//file_put_contents("tesList.data",$shouTuCount);
				for($i=1;$i<=$shouTuCount;$i++)
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
				//$this->pause(18000000000);
				$colors = $this->getText("//ul[@id='shoesform']/li[26]/code");
				$colors = explode(";",$colors);
				for($j=1;$j<count($colors);$j++)
				{
					$this->click("//ul[@id='shoesform']/li[27]/ul/li[$j]/input");
					$this->type("//ul[@id='shoesform']/li[27]/ul/li[$j]/label/input", $colors[$j-1]);
				}
				//$this->pause(18000000000);
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
				//$this->pause(18000000000);
				//选择详情图片
				$xiangTuCount = 0;
				for($i=1; ;$i++)
				{
					if($this->isElementPresent("//div[@id='bbmslist']/b[$i]"))
					{
						$xiangTuCount++;
					}else{
						break;
					}
				}
				//if($xiangTuCount >20)$xiangTuCount = 20;
				for($i=1;$i<=$xiangTuCount;$i++)
				{
					$this->click("//div[@id='bbmslist']/b[$i]/table/tbody/tr/td/img");
				}
				//$this->pause(18000000000);
				//选择店铺分类
				$this->click("//dl[@class='seller_cat']/dd[1]/input");
				//$this->pause(18000000000);
				$this->pause(30000);
				$this->click("//input [@id='csvbutton']");
				//$this->clickAndWait("//input [@id='csvbutton']");
				//$this->isElementPresent("//input [@id='csvbutton']")
				//$endUrl = $this->getEval("window.location.href");
				//file_put_contents("tesList.data",$endUrl);
				$this->waitForElementPresent ("//div [@class='message-title-txt']");
				$giveUp = false;
				$success = false;

				while($giveUp == false && $success == false)
				{

					if($this->isTextPresent("按照错误提示"))
					{
						//$this->open("http://www.baidu.com/");
						//file_put_contents("tesList.data","关闭当前提示面板,按照错误提示,重新设置后发布!");
						$giveUp = true;
						//$this->pause(10000);
					}elseif($this->isTextPresent("发布到淘宝失败"))
					{
						//$this->open("http://www.baidu.com/");
						//file_put_contents("tesList.data","发布到淘宝失败: 发布超时,请减少图片重试");
						//$this->pause(30000);
						//$this->click("//a [@class='message-title-close']");
						//$this->click("//input [@id='csvbutton
						//已经等待了10min
						$giveUp = true;
					}elseif($this->isTextPresent("正在向淘宝发布本商品"))
					{
						//继续等待
						//$this->open("http://www.baidu.com/");
						//$this->pause(10000);
					}else
					{
						//$this->open("http://www.baidu.com/s?wd=else&rsv_spt=1&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&bs=%E9%BB%98%E8%AE%A4");
						$success = true;
					}
					$this->pause(10000);
				}

				$this->pause(18000000000);
				//----------------------------detail end------------------------------------------
				//----------------------------upload start------------------------------------------
				
				
				
				//----------------------------upload start------------------------------------------
		
		
		
			}	
		}
		//file_put_contents("tesList.data",$productsList);
		//$this->pause(18000000000);

			
		

		//----------------------------list end------------------------------------------
		
			
			
			
			
			
			
	}
}
