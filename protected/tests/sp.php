<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
 
class WebTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser('*googlechrome C:\Users\Administrator\AppData\Local\Google\Chrome\Application\chrome.exe');
        $this->setBrowserUrl('http://www.example.com/');
    }
 
    public function testTitle()
    {
        $this->open('http://www.example.com/');
        $this->assertTitleEquals('Example Web Page');
    }
}
?>