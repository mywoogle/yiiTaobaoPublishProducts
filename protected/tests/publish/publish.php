<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//----------------------------login start------------------------------------------
		
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

		//----------------------------login end------------------------------------------
		//----------------------------list start------------------------------------------
		
		$productsList = array();
		//在这里替换发布列表
		$this->open("http://cxl.go2.cn/c4-1-0.go");
		//必须在这里替换报告名
		$listReport = 'publish/reports/cxl.go2.cn_c4-1-0.go.txt';
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
			$productsList[] = $tem_Product;
		}
		foreach($productsList as $product)
		{
			$temProduct = str_replace('product', 'product/publish', $product);
			$temProduct = explode('.go?', $temProduct);
			$temPublish = $temProduct[0];
			file_put_contents("$listReport","\n$product", FILE_APPEND );
			//判断是否已经发布过了和是否有属性列表
			$this->open("http://www.baidu.com/");
$js = <<<Eof
	var target=document.getElementById("lg");  
	var a=document.createElement("a");  
	a.id="myProduct"; 
	a.href="$product";
	a.innerHTML="Tem product";
	target.appendChild(a);  
Eof;
			$this->runScript($js);
			$this->click("//a [@id='myProduct']");
			$this->waitForElementPresent ("//dd[@id='productbtn']/a[1]");
			$this->waitForElementPresent ("//ul[@id='propsul']/li[1]");					
			$new_text = $this->getText("//dd[@id='productbtn']/a[1]");
			$new_required = $this->isElementPresent("//ul[@id='propsul']/li[1]");
			if(($new_text == "发布到淘宝") && $new_required)
			{
				$this->open($temPublish);
			
				//----------------------------detail start------------------------------------------
				
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
				for($i=1;$i<=$shouTuCount;$i++)
				{
					$this->click("//div[@id='imglist']/ul[1]/li[$i]/table/tbody/tr/td/img");
				}
				//选择上架时间-
				$this->click("//input[@value='instock']");
				//输入宝贝名称-
				$this->type("//input[@name='title']", "时尚女鞋");
				//选择运费模板
				$this->select("postage_id","value=1271450970");
				//选择颜色
				$colors = $this->getText("//ul[@id='shoesform']/li[26]/code");
				$colors = explode(";",$colors);
				for($j=1;$j<count($colors);$j++)
				{
					$this->click("//ul[@id='shoesform']/li[27]/ul/li[$j]/input");
					$this->type("//ul[@id='shoesform']/li[27]/ul/li[$j]/label/input", $colors[$j-1]);
				}
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
				for($i=1;$i<=$xiangTuCount;$i++)
				{
					$this->click("//div[@id='bbmslist']/b[$i]/table/tbody/tr/td/img");
				}
				//选择店铺分类
				$this->click("//dl[@class='seller_cat']/dd[1]/input");
				$this->click("//input [@id='csvbutton']");
				
				//----------------------------detail end------------------------------------------
				//----------------------------upload start------------------------------------------
				
				$giveUp = false;
				$success = false;

				while($giveUp == false && $success == false)
				{

					if($this->isTextPresent("按照错误提示"))
					{
						//必填属性不完整
						$giveUp = true;
						file_put_contents("$listReport","------必填属性不完整", FILE_APPEND );
					}elseif($this->isTextPresent("发布到淘宝失败"))
					{
						//已经等待了10min
						$giveUp = true;
						file_put_contents("$listReport","------已经等待了10min", FILE_APPEND );
					}elseif($this->isTextPresent("正在向淘宝发布本商品"))
					{
						//继续等待
					}else
					{
						//上传完成
						$success = true;
					}
					$this->pause(10000);
				}
				
				//----------------------------upload end------------------------------------------
				//----------------------------Confirmation has been successfully posted,start-------------
				
				$this->open("http://www.baidu.com/");
$js = <<<Eof
	var target=document.getElementById("lg");  
	var a=document.createElement("a");  
	a.id="myProduct"; 
	a.href="$product";
	a.innerHTML="Tem product";
	target.appendChild(a);  
Eof;
				$this->runScript($js);
				$this->click("//a [@id='myProduct']");
				$this->waitForElementPresent ("//dd[@id='productbtn']/a[1]");
				$temTex = $this->getText("//dd[@id='productbtn']/a[1]");
				if($temTex == "已发布到淘宝")
				{
					file_put_contents("$listReport","------确实发布成功了", FILE_APPEND );
				}else
				{
					file_put_contents("$listReport","------未知的发布失败原因", FILE_APPEND );
				}

				//----------------------------Confirmation has been successfully posted,end--------------

			}else
			{
				file_put_contents("$listReport","------已经发布过了或者没有参数列表", FILE_APPEND );
			}
			//暂停10s发布下一个产品
			$this->pause(10000);
		}

		//----------------------------list end------------------------------------------
		
	}
}
