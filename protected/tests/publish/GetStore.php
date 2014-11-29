<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//----------------------------login start------------------------------------------
		$this->open("http://sell.taobao.com/auction/merchandise/auction_list.htm?type=1");
		while(true)
		{//goods-in-stock
			if($this->isElementPresent("//div[@id='goods-in-stock']"))
			{
				break;
			}
			$this->open("http://sell.taobao.com/auction/merchandise/auction_list.htm?type=1");
			$this->pause(10000);
		}
		//----------------------------login end------------------------------------------
		
		//----------------------------list start------------------------------------------
		$pageCount = 0;
		for($i=1; ;$i++)
		{
			if($this->isElementPresent("//div[@id='goods-in-stock']/div[2]/table/tbody[2]/tr[3]/td/div/ul/li[$i]"))
			{
				$pageCount++;
			}else{
				break;
			}
		}
		//获取第一页的产品
		for($j=1;$j<=20;$j++)
		{
			if($this->isElementPresent("//div[@id='goods-in-stock']/div[2]/table/tbody[1]/tr[$j*2-1]"))
			{
				$target_taobao_id = $this->getAttribute("//div[@id='goods-in-stock']/div[2]/table/tbody[1]/tr[$j*2-1]/td/input/@value");
				$sellerCode = $this->getText("//div[@id='goods-in-stock']/div[2]/table/tbody[1]/tr[$j*2-1]/td/label");
				$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$target_taobao_id));
				if(!$temResult['target_taobao_id'])
				{
					$sellerCode = str_replace('商家编码：','',$sellerCode);
					$sellerGo2Code = preg_replace("/-[0-9]{5,12}&/is", "&", $sellerCode); 
					$myTarget = new Target();
					$myTarget->target_taobao_id = $target_taobao_id;
					$myTarget->xuetongneilicaizhi = '等待修改';
					$myTarget->xuetongcaizhi = '等待修改';
					$myTarget->shangshinianfenjijie = '等待修改';
					$myTarget->fengge = '等待修改';
					$myTarget->bangmiancaizhi = '等待修改';
					$myTarget->xuemianneilicaizhi = '等待修改';
					$myTarget->pizhitezhi = '等待修改';
					$myTarget->xiedicaizhi = '等待修改';
					$myTarget->xuekuanpingming = '等待修改';
					$myTarget->tonggao = '等待修改';
					$myTarget->xietongkuanshi = '等待修改';
					$myTarget->genggao = '等待修改';
					$myTarget->xiegengkuanshi = '等待修改';
					$myTarget->bihefangshi = '等待修改';
					$myTarget->liuxingyuansu = '等待修改';
					$myTarget->zhizhuogongyi = '等待修改';
					$myTarget->tuan = '等待修改';
					$myTarget->shehejijie = '等待修改';
					$myTarget->target_taobao_title1 = '等待修改';
					$myTarget->target_taobao_title2 = '等待修改';
					$myTarget->target_taobao_title3 = '等待修改';
					$myTarget->target_taobao_sku = $sellerCode;
					$myTarget->target_go2_sku = $sellerGo2Code;
					$myTarget->target_title_search = 0;//target_title_search可以为0没有搜索,1,2，3标示进行了1,2,3次搜索
					$myTarget->target_title_used = 0;//target_title_used只能是0:没有使用，1:已经使用
					$myTarget->source_taobao_id1 = $target_taobao_id;
					$myTarget->source_taobao_id2 = $target_taobao_id;
					$myTarget->source_taobao_id3 = $target_taobao_id;
					$myTarget->source_taobao_keyword1 = '等待修改';
					$myTarget->source_taobao_keyword2 = '等待修改';
					$myTarget->source_taobao_keyword3 = '等待修改';
					$myTarget->save();
				}
			}else{
				break;
			}
		}
		//获取第一页以后的产品
		for($i=4;$i<=$pageCount-2;$i++)
		{
			$this->click("//div[@id='goods-in-stock']/div[2]/table/tbody[2]/tr[3]/td/div/ul/li[$i]/a");
			$this->waitForPageToLoad(30000);
			for($j=1;$j<=20;$j++)
			{
				if($this->isElementPresent("//div[@id='goods-in-stock']/div[2]/table/tbody[1]/tr[$j*2-1]"))
				{
					$target_taobao_id = $this->getAttribute("//div[@id='goods-in-stock']/div[2]/table/tbody[1]/tr[$j*2-1]/td/input/@value");
					$sellerCode = $this->getText("//div[@id='goods-in-stock']/div[2]/table/tbody[1]/tr[$j*2-1]/td/label");
					$temResult = Target::model()->find('target_taobao_id=:target_taobao_id',array(':target_taobao_id'=>$target_taobao_id));
					if(!$temResult['target_taobao_id'])
					{
						$sellerCode = str_replace('商家编码：','',$sellerCode);
						$sellerGo2Code = preg_replace("/-[0-9]{5,12}&/is", "&", $sellerCode); 
						$myTarget = new Target();
						$myTarget->target_taobao_id = $target_taobao_id;
						$myTarget->xuetongneilicaizhi = '等待修改';
						$myTarget->xuetongcaizhi = '等待修改';
						$myTarget->shangshinianfenjijie = '等待修改';
						$myTarget->fengge = '等待修改';
						$myTarget->bangmiancaizhi = '等待修改';
						$myTarget->xuemianneilicaizhi = '等待修改';
						$myTarget->pizhitezhi = '等待修改';
						$myTarget->xiedicaizhi = '等待修改';
						$myTarget->xuekuanpingming = '等待修改';
						$myTarget->tonggao = '等待修改';
						$myTarget->xietongkuanshi = '等待修改';
						$myTarget->genggao = '等待修改';
						$myTarget->xiegengkuanshi = '等待修改';
						$myTarget->bihefangshi = '等待修改';
						$myTarget->liuxingyuansu = '等待修改';
						$myTarget->zhizhuogongyi = '等待修改';
						$myTarget->tuan = '等待修改';
						$myTarget->shehejijie = '等待修改';
						$myTarget->target_taobao_title1 = '等待修改';
						$myTarget->target_taobao_title2 = '等待修改';
						$myTarget->target_taobao_title3 = '等待修改';
						$myTarget->target_taobao_sku = $sellerCode;
						$myTarget->target_go2_sku = $sellerGo2Code;
						$myTarget->target_title_search = 0;//target_title_search可以为0没有搜索,1,2，3标示进行了1,2,3次搜索
						$myTarget->target_title_used = 0;//target_title_used只能是0:没有使用，1:已经使用
						$myTarget->source_taobao_id1 = $target_taobao_id;
						$myTarget->source_taobao_id2 = $target_taobao_id;
						$myTarget->source_taobao_id3 = $target_taobao_id;
						$myTarget->source_taobao_keyword1 = '等待修改';
						$myTarget->source_taobao_keyword2 = '等待修改';
						$myTarget->source_taobao_keyword3 = '等待修改';
						$myTarget->save();
					}
				}else{
					break;
				}
			}
		}
		//----------------------------list end------------------------------------------
	}
}
