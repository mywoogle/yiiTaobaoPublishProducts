<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		$myTarget = new Target();
		$myTarget->target_taobao_id = '12345678901';
		$myTarget->target_taobao_attrs = "靴筒内里材质: 人造短毛绒 靴筒材质: 绒面 货号: 1013605127 上市年份季节: 2013年冬季 风格: 甜美 帮面材质: 西施绒 马毛 鞋面内里材质: 人造短毛绒 皮质特征: 软面 鞋底材质: 橡胶 靴款品名: 马丁靴 筒高: 短筒 鞋头款式: 圆头 跟高: 高跟(5-8cm) 鞋跟款式: 粗跟 闭合方式: 侧拉链 流行元素: 防水台 制作工艺: 胶粘鞋 ";
		$myTarget->target_taobao_title1 = '2014秋冬季短靴粗跟高跟短筒靴欧美马毛防水台裸靴英伦马丁靴女鞋';
		$myTarget->target_taobao_title2 = '2014秋冬季短靴粗跟高跟短筒靴欧美马毛防水台裸靴英伦马丁靴女鞋';
		$myTarget->target_taobao_title3 = '2014秋冬季短靴粗跟高跟短筒靴欧美马毛防水台裸靴英伦马丁靴女鞋';
		$myTarget->target_taobao_sku = '啊时代发生的佛挡杀佛&12334-22';
		$myTarget->target_go2_sku = '啊时代发生的佛挡杀佛&12334-22';
		$myTarget->target_title_search = 0;
		$myTarget->target_title_used = 0;
		$myTarget->source_taobao_id1 = '12345678901';
		$myTarget->source_taobao_id2 = '12345678901';
		$myTarget->source_taobao_id3 = '12345678901';
		$myTarget->source_taobao_keyword1 = '女鞋';
		$myTarget->source_taobao_keyword2 = '女靴';
		$myTarget->source_taobao_keyword3 = '靴子';
		$myTarget->save();
		
	}
}
