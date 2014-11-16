<?php
class newTest extends WebTestCase
{
	public function testSet()
	{

		$productsList = array();
		$this->open("http://jinlan.go2.cn/c4-1-0.go");
		
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
			$tem_Product = str_replace('product', 'product/publish', $tem_Product);
			$tem_Product = explode('.go?', $tem_Product );
			$tem_Product = $tem_Product[0];
			$productsList[] = $tem_Product;
		}
		file_put_contents("tesList.data",$productsList);
		foreach($productsList as $product)
		{
			$this->open($product);
			$this->pause(10000);
		}
		file_put_contents("tesList.data",$productsList);
		$this->pause(18000000000);
			

			
			
			
			
			
	}
}
