<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//----------------------------login start------------------------------------------
		
		$init_url = 'http://www.go2.cn/product/publish/cicsq';
		$max_time = 120;

		$this->open("$init_url");
		
		while(true)
		{
			//登录go2
			if($this->isElementPresent("//div[@class='xplong']"))
			{
				//http://www.go2.cn/user/login
				$this->open("http://www.go2.cn/user/login");
				$this->pause(10000);
			}
			
			//longin taobao
			if($this->isElementPresent("//button [@id='J_SubmitStatic']"))
			{
				$this->open("https://login.taobao.com/member/login.jhtml?spm=1.7274553.1997563269.1.LEVuu1&f=top&redirectURL=http%3A%2F%2Fwww.taobao.com%2F");
				$this->pause(10000);
			}
			
			//进入授权页面
			if($this->isElementPresent("//button [@id='sub']"))
			{
				$this->open("$init_url");
				$this->pause(10000);
			}
			
			//判断是否进入了发布页面
			if($this->isElementPresent("//input [@id='csvbutton']"))
			{
				break;
			}else
			{
				$this->open("$init_url");
			}
		}
		
		//$this->pause(100000000);
		//----------------------------login end------------------------------------------
		
		//----------------------------chang jia loop,start.------------------------------------------
		
		$factorys = Factory::model()->findAll('factory_flag=:factory_flag',array(':factory_flag'=>0));
		
		//厂家循环
		foreach($factorys as $factory)
		{
			//----------------------------list start------------------------------------------	
			$productsList = array();
			//在这里替换发布列表
			$factory_name = $factory->factory_name;
			$product_category = $factory->product_category;
			$this->open("http://$factory_name.go2.cn/$product_category.go");
			//必须在这里替换报告名
			$listReport = "publish/reports/$factory_name.go2.cn_$product_category.go.txt";
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

			if($factory->factory_num < $productsCount)
			{
				$productFlag = 0;
				$productsCountGod = 0;
				for($i=$factory->factory_num;$i<=$productsCount;$i++)
				{
					$tem_Product = $this->getAttribute("//ul[@id='products']/li[$i]/strong/a/@href");
					$productsList[] = $tem_Product;
				}
				$productsListCount = count($productsList);
				foreach($productsList as $product)
				{
					$productFlag++;
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
						a.innerHTML="------发布进度：$productFlag/$productsListCount ------ 确实发布成功：$productsCountGod/$productFlag ------";
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
						//$this->open($temPublish);
						//搜集首图
						$shouTus = array();
						$shouTusCount = 0;
						for($i=1; ;$i++)
						{
							if($this->isElementPresent("//div[@id='smallimg']/a[$i]"))
							{
								$shouTusCount++;
							}else{
								break;
							}
						}
						for($i=1;$i<=$shouTusCount;$i++)
						{
							$shouTuUrlTem = $this->getAttribute("//div[@id='smallimg']/a[$i]/img/@src");
							$shouTuUrl = str_replace('50x50','120x120',$shouTuUrlTem);
							$shouTuUrl = strtolower($shouTuUrl);
							$shouTus[] = $shouTuUrl;
						}
						//file_put_contents("publish/reports/test.txt",implode("\n",$shouTus), FILE_APPEND );
						while(true)
						{
							$this->open("http://www.baidu.com/");
							$js = <<<Eof
								var target=document.getElementById("lg");  
								var a=document.createElement("a");  
								a.id="myProduct"; 
								a.href="$temPublish";
								a.innerHTML="------发布进度：$productFlag/$productsListCount ------ 确实发布成功：$productsCountGod/$productFlag ------";
								target.appendChild(a);  
Eof;
							$this->runScript($js);
							$this->click("//a [@id='myProduct']");
							$this->pause(10000);
							if($this->isElementPresent("//input [@id='csvbutton']"))
							{
								break;
							}
						}
						
						//----------------------------detail start------------------------------------------
						
						//选择首图-$shouTus
						$shouTusCountEnd = 0;
						$shouTusIndexs = array();
						for($i=1; ;$i++)
						{
							if($this->isElementPresent("//div[@id='imglist']/ul[1]/li[$i]") && $shouTusCountEnd<$shouTusCount)
							{
								foreach($shouTus as $shouTu)
								{
									$temTargetImgUrl = $this->getAttribute("//div[@id='imglist']/ul[1]/li[$i]/table/tbody/tr/td/img/@src");
									$temTargetImgUrl = strtolower($temTargetImgUrl);
									if($temTargetImgUrl == $shouTu)
									{
										$shouTusCountEnd++;
										$shouTusIndexs[$temTargetImgUrl] = $i;
									}
								}
							}else{
								break;
							}
						}
						
						//当首图都有的时候，才选择。
						if($shouTusCountEnd == $shouTusCount)
						{
							foreach($shouTus as $shouTu)
							{
								$shouTusIndexTem = $shouTusIndexs[$shouTu];
								$this->click("//div[@id='imglist']/ul[1]/li[$shouTusIndexTem]/table/tbody/tr/td/img");
							}
							
							//file_put_contents("publish/reports/test.txt","+++++++++$shouTusCountEnd+++++$shouTusCount++++", FILE_APPEND );
							//$this->open("http://www.baidu.com/");
							//$this->pause(1000000);
							//获取商家编码
							$sellerCode = $this->getValue("//ul[@id='shoesform']/li[20]/input");
							//file_put_contents("publish/reports/test.txt",$sellerCode, FILE_APPEND );
							//选择上架时间-
							$this->click("//input[@value='instock']");
							//输入宝贝名称-
							$this->type("//input[@name='title']", "$sellerCode");
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
							if(preg_match("/^[\d,]+$/",$chicuns) == 0)
							{
								for($i=1; ;$i++)
								{
									if($this->isElementPresent("//ul[@id='shoesform']/li[29]/ul/li[$i]/input"))
									{
										$this->uncheck("//ul[@id='shoesform']/li[29]/ul/li[$i]/input");
									}else{
										break;
									}
								}
							}
							
							$chicuns = explode(",",$chicuns);
							for($j=1;$j<=count($chicuns);$j++)
							{
								$tem = intval($chicuns[$j-1])-32;
								if($tem==1 || $tem>7){
									if($this->isElementPresent("//ul[@id='shoesform']/li[29]/ul/li[$tem]/input"))
									{
										$this->click("//ul[@id='shoesform']/li[29]/ul/li[$tem]/input");
									}
								}
							}
							
							//过滤产品详情里面的文字内容
							$this->selectFrame("//iframe[@class='ke-edit-iframe']");
							$temText = $this->getText("//body[@class='ke-content']");
							
							$finds=array(
								'q',
								'Q',
								'电',
								'话',
								'地',
								'址',
								'厂',
								'家',
								"号",
								'GO2',
								'go2',
								'代',
								'传',
								'真',
								'联',
								'系',
								'手',
								'机',
								'品',
								'牌',
								'包装',
								'鞋业',
								'群',
								'支付宝',
								'商贸城',
								'单',
								'发',
								'价'
							);
									
							$temTextArry  = explode("\n", $temText);
							$temTextEnd = array();
							$temTextDel = array();
							$temTextAll = array();
							foreach ($temTextArry as $item) 
							{
								if (trim($item) != '') 
								{
									foreach ($finds as $find) 
									{
										if (strpos($item, $find) !== false)
										{
											if (!in_array($item,$temTextEnd))
											{
												$temTextDel[] = trim($item)."\n";
											}
										}
									}
									if (!in_array($item,$temTextEnd))
									{
										$temTextAll[] = trim($item)."\n";
									}
								}
							}
							$temTextAll = array_flip($temTextAll);
							$temTextAll = array_flip($temTextAll);
							$temTextDel = array_flip($temTextDel);
							$temTextDel = array_flip($temTextDel);
							$temTextEnd = array_diff($temTextAll, $temTextDel);
							$temTextEndNew = array();
							foreach($temTextEnd as $item)
							{
								if(strpos($item,'加'))
								{
									preg_match_all('|(\d+)|',$item,$addPrices);
									foreach ($addPrices[0] as $addPrice)
									{
										$temFlag = '加'.$addPrice.'元';
										if (strpos($item,$temFlag)) 
										{
											$newTemFlag = '加'.$addPrice*2 .'元，定做不退换，';
											$item = str_replace($temFlag, $newTemFlag, $item);
										}
									}
								}
						
								if(strpos($item,'＋'))
								{
									preg_match_all('|(\d+)|',$item,$addPrices);
									foreach ($addPrices[0] as $addPrice)
									{
										$temFlag = '＋'.$addPrice.'元';
										if (strpos($item,$temFlag)) 
										{
											$newTemFlag = '＋'.$addPrice*2 .'元，定做不退换，';
											$item = str_replace($temFlag, $newTemFlag, $item);
										}
									}
								}
						
								if (!in_array($item,$temTextEndNew))
								{
									$temTextEndNew[] = trim($item);
								}
							}
							$typeContent = implode('<br>',$temTextEndNew); 
							//过滤手机号码
							$typeContent = preg_replace("/(?:1[3|4|5|8]d{1}|15[03689])d{8}$/","",$typeContent);
							//过滤qq号码
							$typeContent = preg_replace("/[1-9]{1}[0-9]{5,12}/","",$typeContent);
							$this->type("//body[@class='ke-content']", "$typeContent");	

							$this->selectFrame("relative=top");
							
							$tem_images = array();
							$tem_images_new = array();
							//选择详情图片
							for($i=1; ;$i++)
							{
								if($this->isElementPresent("//div[@id='bbmslist']/b[$i]"))
								{
									$img_url = $this->getAttribute("//div[@id='bbmslist']/b[$i]/table/tbody/tr/td/img/@src");
									$img_url = str_replace('120x120','750x750',$img_url);
									$img_size = get_headers($img_url);
									$img_size_tem = 10240000;
									if($img_size[0] == 'HTTP/1.1 200 OK')
									{
										foreach($img_size as $img_size_item)
										{
											if(strpos($img_size_item,'Content-Length: ') !== false)
											{
												$img_size_tem = floatval(str_replace('Content-Length: ','',$img_size_item));
											}
										}
									}
									if($img_size_tem < 512000)
									{
										$tem_images[$i] = $img_size_tem;
										//$this->click("//div[@id='bbmslist']/b[$i]/table/tbody/tr/td/img");
										//file_put_contents("publish/reports/test.txt",$img_url."\n", FILE_APPEND );
										//file_put_contents("publish/reports/test.txt",$img_size[0]."\n", FILE_APPEND );
										//file_put_contents("publish/reports/test.txt",$img_size_tem."\n", FILE_APPEND );
										//file_put_contents("publish/reports/test.txt",$tem_images[$i]."\n", FILE_APPEND );
										
									}
								}else{
									break;
								}
							}
							$tem_images_new_value = array_unique($tem_images);
							$tem_images_new = array_keys($tem_images_new_value);
							//$tem_a = array_flip($tem);
							//$img_size_tem_new = array_flip($img_size_tem_new);
							foreach($tem_images_new as $tem_images_new_item)
							{
								$this->click("//div[@id='bbmslist']/b[$tem_images_new_item]/table/tbody/tr/td/img");
							}
							//$this->pause(20000000);
							//选择店铺分类
							//选择小分类
							$temProductFenLei = 0;
							$temProductDaFenLei = 0;
							for($i=1; ;$i++)
							{
								if($this->isElementPresent("//dl[@class='seller_cat']/dd[$i]/input") && $temProductFenLei == 0)
								{
									$temFenLei = $this->getText("//dl[@class='seller_cat']/dd[$i]/span");
									$temDateFenLei = date('Y-m-d',time());
									if($temFenLei == $temDateFenLei)
									{
										$this->click("//dl[@class='seller_cat']/dd[$i]/input");
										$temProductFenLei++;
									}
								}else{
									break;
								}
							}
							//如果没找到小分类，就用分到“星期日上架”；
							if($temProductFenLei == 0)
							{
								for($i=1; ;$i++)
								{
									if($this->isElementPresent("//dl[@class='seller_cat']/dd[$i]/input"))
									{
										$temFenLei = $this->getText("//dl[@class='seller_cat']/dd[$i]/span");
										$temDateFenLei = '星期日上架';
										if($temFenLei == $temDateFenLei)
										{
											$this->click("//dl[@class='seller_cat']/dd[$i]/input");
										}
									}else{
										break;
									}
								}
							}
							
							//选择大分类
							for($i=1; ;$i++)
							{
								if($this->isElementPresent("//dl[@class='seller_cat']/dt[$i]/input") && $temProductDaFenLei==0)
								{
									$temFenLei = $this->getText("//dl[@class='seller_cat']/dt[$i]/span");
									$temDaFenLei = '最新靴子';
									if($temFenLei == $temDaFenLei)
									{
										$this->click("//dl[@class='seller_cat']/dt[$i]/input");
										$temProductDaFenLei++;
									}
								}else{
									break;
								}
							}
							//如果没找到大分类，就用分到“靴子精选3”；
							if($temProductDaFenLei == 0)
							{
								for($i=1; ;$i++)
								{
									if($this->isElementPresent("//dl[@class='seller_cat']/dt[$i]/input"))
									{
										$temFenLei = $this->getText("//dl[@class='seller_cat']/dt[$i]/span");
										$temDaFenLei = '靴子精选3';
										if($temFenLei == $temDaFenLei)
										{
											$this->click("//dl[@class='seller_cat']/dt[$i]/input");
										}
									}else{
										break;
									}
								}
							}
						}


						//提交发布
						$this->click("//input [@id='csvbutton']");
						
						//----------------------------detail end------------------------------------------
						//----------------------------upload start------------------------------------------
						
						$giveUp = false;
						$success = false;
						$target_taobao_id = '';
						$this->setSpeed("1000");
						while($giveUp == false && $success == false)
						{
							$this->pause(10000);
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
								$tem_time = $this->getText("//td[@class='message-content-txt']/p/span");
								if(600-floatval($tem_time)>$max_time)
								{
									$giveUp = true;
									file_put_contents("$listReport","------已经等待了 $max_time 秒", FILE_APPEND );
								}
							}else
							{
								//上传完成
								$success = true;
								//获取发布成功的淘宝Id
								$js = 'window.location.search';
								$tem = $this->getEval($js);
								$tem = explode('&num_iid=', $tem );
								if(isset($tem[1]))
								{
									$tem = $tem[1];
									$tem = explode('&url=', $tem );
									$target_taobao_id = $tem[0];
								}else
								{
									$target_taobao_id = '获取返回的产品id失败';
								}
							}
						}
						$this->setSpeed("0");
						
						//----------------------------upload end------------------------------------------
						
						//----------------------------Confirmation has been successfully posted,start-------------
						
						$this->open("http://www.baidu.com/");
						$js = <<<Eof
							var target=document.getElementById("lg");  
							var a=document.createElement("a");  
							a.id="myProduct"; 
							a.href="$product";
							a.innerHTML="------发布进度：$productFlag/$productsListCount ------ 确实发布成功：$productsCountGod/$productFlag ------";
							target.appendChild(a);  
Eof;
						$this->runScript($js);
						$this->click("//a [@id='myProduct']");
						$this->waitForElementPresent ("//dd[@id='productbtn']/a[1]");
						$temTex = $this->getText("//dd[@id='productbtn']/a[1]");
						if($temTex == "已发布到淘宝")
						{
							file_put_contents("$listReport","------确实发布成功了", FILE_APPEND );
							$productsCountGod++;
							//添加到target数据库表里面
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
							
							$nowFactory = Factory::model()->find('factory_flag=:factory_flag and factory_name=:factory_name and product_category=:product_category',array(':factory_flag'=>0,'factory_name'=>$factory_name,'product_category'=>$product_category));
							$nowFactory->factory_num  = 1+$nowFactory->factory_num;
							$nowFactory->save();
							
							
						}else
						{
							file_put_contents("$listReport","------未知的发布失败原因", FILE_APPEND );
							$nowFactory = Factory::model()->find('factory_flag=:factory_flag and factory_name=:factory_name and product_category=:product_category',array(':factory_flag'=>0,'factory_name'=>$factory_name,'product_category'=>$product_category));
							$nowFactory->factory_num  = 1+$nowFactory->factory_num;
							$nowFactory->save();
						}

						//----------------------------Confirmation has been successfully posted,end--------------

					}else
					{
						file_put_contents("$listReport","------已经发布过了或者没有参数列表", FILE_APPEND );
					}
					//暂停10s发布下一个产品
					$this->pause(10000);
					
				}
			}
			
			$nowFactory = Factory::model()->find('factory_flag=:factory_flag and factory_name=:factory_name and product_category=:product_category',array(':factory_flag'=>0,'factory_name'=>$factory_name,'product_category'=>$product_category));
			$nowFactory->factory_flag  = 1;
			$nowFactory->save();
			file_put_contents("$listReport","\n------发布进度：$productFlag/$productsListCount ------ 确实发布成功：$productsCountGod/$productFlag ------", FILE_APPEND );
			
			//----------------------------list end------------------------------------------			
		}
		//----------------------------chang jia loop,end.------------------------------------------
	}
}