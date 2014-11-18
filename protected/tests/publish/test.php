<?php
class newTest extends WebTestCase
{
	public function testSet()
	{
		//----------------------------login start------------------------------------------
		
		$this->open("http://www.go2.cn/product/oakgao.go");
		//include('filters.class.php');
		$temTex = $this->getText("//div[@id='productmemo']");
		$temTex = str_replace("\n", "<br>", $temTex);
		
		
$product_body_text_new = explode('<br>',$temTex);
//$product_body_text_new = array_flip($product_body_text_new);
//$product_body_text_new = array_flip($product_body_text_new);
//("publish/reports/test0.html", $product_body_text_new);
	$strings = $product_body_text_new;
	$returns = array();
	$return_string_end = '';
	$finds=array(
		'q',
		'Q',

		);
		
	foreach($finds as $find){
		foreach($strings as $string){
			if(!strpos($string, $find)>0 && $string != ''){
				if(!in_array($string,$returns)){
					//array_push($returns,$string);
					$returns[] = $string.'<br>';
				}
			}
		}
	}
	file_put_contents("publish/reports/test1.html", $returns);
	/*
	$tem_diff_texts = array_diff($strings,$returns);
	foreach($tem_diff_texts as $tem_diff_text){
		$return_string_end = $return_string_end.$tem_diff_text.'<br>';
	}
	return $return_string_end;
		
		*/
		
		
		//file_put_contents("publish/reports/test1.html", $return_string_end);


	}
}
