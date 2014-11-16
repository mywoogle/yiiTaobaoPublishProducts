<?php
class newTest extends WebTestCase
{
public function testList()
{
$this->open("http://woogle-dev.tff.com/new-york-city-tours/");
for($i=2;$i<=6;$i++){
$element = "//div[@id='products']/div[".$i."]/h3/a/@href";
$href[] = $this->getAttribute($element)."------This is a flog.~!@#$%^&*()_+?><|\n\r";
}
file_put_contents("tesList.data",$href);
}
public function testDetail_0()
{
file_put_contents("20141106133017_testReport.txt","\n\rtestDetail_0",FILE_APPEND);
$content = file_get_contents("tesList.data");
$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);
$this->open($urls[0]);
file_put_contents("20141106133017_testReport.txt","------Succeed",FILE_APPEND);
}
public function testDetail_1()
{
file_put_contents("20141106133017_testReport.txt","\n\rtestDetail_1",FILE_APPEND);
$content = file_get_contents("tesList.data");
$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);
$this->open($urls[1]);
file_put_contents("20141106133017_testReport.txt","------Succeed",FILE_APPEND);
}
public function testDetail_2()
{
file_put_contents("20141106133017_testReport.txt","\n\rtestDetail_2",FILE_APPEND);
$content = file_get_contents("tesList.data");
$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);
$this->open($urls[2]);
file_put_contents("20141106133017_testReport.txt","------Succeed",FILE_APPEND);
}
public function testDetail_3()
{
file_put_contents("20141106133017_testReport.txt","\n\rtestDetail_3",FILE_APPEND);
$content = file_get_contents("tesList.data");
$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);
$this->open($urls[3]);
file_put_contents("20141106133017_testReport.txt","------Succeed",FILE_APPEND);
}
public function testDetail_4()
{
file_put_contents("20141106133017_testReport.txt","\n\rtestDetail_4",FILE_APPEND);
$content = file_get_contents("tesList.data");
$urls = explode("------This is a flog.~!@#$%^&*()_+?><|\n\r", $content);
$this->open($urls[4]);
file_put_contents("20141106133017_testReport.txt","------Succeed",FILE_APPEND);
}
}
