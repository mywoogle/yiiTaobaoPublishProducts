<?php

/*
echo 'class SiteTest extends WebTestCase'."\n";
echo '{'."\n";

	echo 'public function testList()'."\n";
	echo '{'."\n";
		echo '$this->open();'."\n";
		//$element = "//div[@id='products']/div[".$i."]/h3/a/@href";
		echo '$element = "//div[@id='."'products'"."]/div[".'.$i.'."]/h3/a/@href"."\n";
		echo '$href = $this->getAttribute($element);'."\n";
		echo 'return $href;'."\n";
	echo '}'."\n";
	echo 'public function testDetail()'."\n";
	echo '{'."\n";
		echo '$this->open();'."\n";
	echo '}'."\n";

echo '}'."\n";

	public function testIndex($flag=1)
	{
		$url = $this->testList($flag);
		$this->testDetail($url);
	}


	echo 'public function testCase($flag=1)'."\n";
	echo '{'."\n";
		echo '$url = $this->testList($flag);'."\n";
		echo '$this->testDetail($url)'."\n";
	echo '}'."\n";


	class SiteTest extends WebTestCase
{
	public function testList()
	{
		$this->open("http://woogle-dev.tff.com/new-york-city-tours/");
		for($i=2;$i<=4;$i++){
			$element = "//div[@id='products']/div[".$i."]/h3/a/@href";
			$href[$i] = $this->getAttribute($element)."------This is a flog.~!@#$%^&*()_+?><|\n\r";
		}
		file_put_contents("tesList.data",$href);
	}
	public function testDetail()
	{
		$content = file_get_contents("tesList.data");
		$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);
		$this->open($urls[0]);
		$this->pause('30000');
	}

	file_put_contents("rote.txt","cc  ",FILE_APPEND);

}

echo  date('Y-m-d-H-i-s');
echo  date('YmdHis');
*/
$listUrl = "http://woogle-dev.tff.com/new-york-city-tours/";
$listFrom = 2;
$listEnd = 6;
$detailMax = 5;
$testReport = date('YmdHis')."_testReport.txt";

$content = '<?php'."\n";
$content = $content .'class newTest extends WebTestCase'."\n";
$content = $content . '{'."\n";

	$content = $content . 'public function testList()'."\n";
	$content = $content . '{'."\n";
		$content = $content . '$this->open("'.$listUrl.'");'."\n";
		$content = $content . 'for($i='.$listFrom.';$i<='.$listEnd.';$i++){'."\n";
			$content = $content . '$element = "//div[@id='."'products'"."]/div[".'"'.'.$i.'.'"'."]/h3/a/@href".'"'.";\n";
			$content = $content . '$href[] = $this->getAttribute($element)."------This is a flog.~!@#$%^&*()_+?><|\n\r";'."\n";
		$content = $content . '}'."\n";
		$content = $content . 'file_put_contents("tesList.data",$href);'."\n";
	$content = $content . '}'."\n";

	for($j=0;$j<$detailMax;$j++){
		$content = $content . 'public function testDetail_'.$j.'()'."\n";
		$content = $content . '{'."\n";
			$content = $content . 'file_put_contents("'.$testReport.'","\n\rtestDetail_'.$j.'"'.',FILE_APPEND);'."\n";
			$content = $content . '$content = file_get_contents("tesList.data");'."\n";
			$content = $content . '$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);'."\n";
			$content = $content . '$this->open($urls['.$j.']);'."\n";
			$content = $content . 'file_put_contents("'.$testReport.'","------Succeed",FILE_APPEND);'."\n";
		$content = $content . '}'."\n";
	}

$content = $content . '}'."\n";

file_put_contents("newTest.php",$content);








