<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
	
		$this->open("http://localhost/detail.html");
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
		
		//$this->check("//option[@value='961297820']");
		//选择颜色
		$colors = $this->getText("//ul[@id='shoesform']/li[26]/code");
		//file_put_contents("tesList.data",$colors);
		//explode(";",'黑色;白色;');
		//$colors = explode(" ",'黑色 白色');
		//$str = "Hello world. It's a beautiful day.";
		//explode(" ",$str);
		//$str = $colors;
		$colors = explode(";",$colors);
		
		for($j=1;$j<count($colors);$j++)
		{
			$this->click("//ul[@id='shoesform']/li[27]/ul/li[$j]/input");
			$this->type("//ul[@id='shoesform']/li[27]/ul/li[$j]/label/input", $colors[$j-1]);
		}
		file_put_contents("tesList.data",$colors);
		//选择尺码
		
		
		
		//选择详情图片
		for($i=1;$i<=5;$i++)
		{
			$this->click("//div[@id='bbmslist']/b[$i]/table/tbody/tr/td/img");
		}
		//选择店铺分类
		$this->click("//dl[@class='seller_cat']/dd[1]/input");
		
		
		$this->pause(18000000000);
	}
}
