<?php 

//$text_filter_tem = filter_new($product_body_text_new);


//-----------------------------------------------------------------

function filter_new($str){
	$tem = $str;
	$tem = text_filter($tem);
	$tem = end_calculatePrice('元',$tem);
	$tem = pre_calculatePrice('价',$tem);
	$tem = pre_calculatePrice('加',$tem);
	return $tem;
}

function filter($str){
	$tem = $str;
	$tem = text_filter($tem);
	$tem = end_calculatePrice('元',$tem);
	$tem = pre_calculatePrice('价',$tem);
	$tem = pre_calculatePrice('加',$tem);
	return $tem;
}

function text_filter($strings){
	$returns = array();
	$return_string_end = '';
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
		);
		
	foreach($finds as $find){
		foreach($strings as $string){
			if(strpos($string, $find)>0){
				if(!in_array($string,$returns)){
					array_push($returns,$string);
				}
			}
		}
	}
	$tem_diff_texts = array_diff($strings,$returns);
	foreach($tem_diff_texts as $tem_diff_text){
		$return_string_end = $return_string_end.$tem_diff_text.'<br>';
	}
	return $return_string_end;
}



function filte_url($string){

   $string = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $string);
   
   $string = preg_replace('/13[0-9]{9}|15[0|1|2|3|5|6|7|8|9]\d{8}|18[0|5|6|7|8|9]\d{8}/', '', $string);
   
   $string = preg_replace('/[1-9][0-9]{4,}/', '', $string);
   $string = preg_replace('/QQ:/', '', $string);
   $string = preg_replace('/qq:/', '', $string);
   $string = preg_replace('/QQ/', '', $string);
   $string = preg_replace('/qq/', '', $string);
   $string = preg_replace('/Q Q/', '', $string);

   
  $string = str_replace('国际商贸城','', $string);
  $string = str_replace('区', '', $string);
  $string = str_replace('楼', '', $string);
  $string = str_replace('街', '', $string);
  $string = str_replace('市场拿货地址：', '', $string);
  $string = str_replace('拿货地址：', '', $string);
  $string = str_replace('地址：', '', $string);
  $string = str_replace('电话：', '', $string);
  $string = str_replace('电话', '', $string);
  $string = str_replace('GO2', '', $string);
    $string = str_replace('电  话：', '', $string);
	$string = str_replace('电    话', '', $string);
	
	$string = str_replace('地  址：', '', $string);
	$string = str_replace('联系方式：', '', $string);
	$string = str_replace('件代发', '', $string);
	$string = str_replace('群', '', $string);

	$tem_start_init = strpos($string,'厂家',0);
	$tem_num_init = substr($string,$tem_start_init,20);
	$string = str_replace($tem_num_init, '', $string);
	
	$tem_start_init = strpos($string,'厂 家',0);
	$tem_num_init = substr($string,$tem_start_init,20);
	$string = str_replace($tem_num_init, '', $string);
	
	$tem_start_init = strpos($string,'品牌',0);
	$tem_num_init = substr($string,$tem_start_init,20);
	$string = str_replace($tem_num_init, '', $string);

	return $string;
}

//pre_calculatePrice('加',$product_body);
function pre_calculatePrice($flag,$str){
	$offset = 0;
	$tem_length = 20;
	$finish = 0;
	$new_product_body = $str;
	$modified = 0;

	$tem_start_init = strpos($new_product_body,$flag,0);
	$new_start_init = $tem_start_init>0?$tem_start_init:0;
	$tem_num_init = substr($new_product_body,$new_start_init,20);
	if($modified == 0){
		while($finish == 0){
			if(!strpos($new_product_body,$flag,$offset+1)){
				$finish = 1;
			}else{
			$tem_start = strpos($new_product_body,$flag,$offset+1).'<br>';
			$new_start = $tem_start>0?$tem_start:0;
			@$tem_num = substr($new_product_body,$new_start,$tem_length);
			$old_num = findNum($tem_num);
			$new_num = '<span clas="price">'.round($old_num>30?$old_num*1.05:$old_num*1.6).'</span>';
			$new_tem_num = str_replace($old_num,$new_num,$tem_num);
			$new_product_body = substr_replace($new_product_body,$new_tem_num,$new_start,$tem_length);
			$offset = strpos($new_product_body,$flag,$offset+1);
			}
		}
		return $new_product_body;
	}
}

//end_calculatePrice('元',$tem);
function end_calculatePrice($flag,$str){
	$offset = 0;
	$tem_length = 15;
	$finish = 0;
	$new_product_body = $str;
	$modified = 0;

	$tem_start_init = strpos($new_product_body,$flag,0);
	$new_start_init = $tem_start_init-50>0?$tem_start_init-50:0;
	$tem_num_init = substr($new_product_body,$new_start_init,50);
	
	if(strpos($tem_num_init,'clas="price"',0)){
		$modified = 1;
		echo 'It is working';
	}
	
	if($modified == 0){
		while($finish == 0){
			if(!strpos($new_product_body,$flag,$offset+1)){
				$finish = 1;
			}else{
			$tem_start = strpos($new_product_body,$flag,$offset+1).'<br>';
			$new_start = $tem_start-$tem_length>0?$tem_start-$tem_length:0;
			$tem_num = substr($new_product_body,$new_start,$tem_length);
			$old_num = findNum($tem_num);
			$new_num = '<span clas="price">'.round($old_num>30?$old_num*1.05:$old_num*1.6).'</span>';
			$new_tem_num = str_replace($old_num,$new_num,$tem_num);
			$new_product_body = substr_replace($new_product_body,$new_tem_num,$new_start,$tem_length);

			$offset = strpos($new_product_body,$flag,$offset+1);
			
			}
		}
		return $new_product_body;
	}
}

function findNum($str=''){

	$str=trim($str);

	if(empty($str)){return '';}

	$result='';

	for($i=0;$i<strlen($str);$i++){

		if(is_numeric($str[$i])){

			$result.=$str[$i];

		}
	}

	return $result;
}
?> 
