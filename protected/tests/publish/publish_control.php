<?php
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
			include_once("publish_detail.php");
			$this->pause(60000);
		}else
		{
			file_put_contents("tesList.data",$href);
		}
		$this->pause(60000);
	}
}
