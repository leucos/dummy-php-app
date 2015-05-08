<?php

include_once('src/DemoApp.php');

class DemoAppTest extends PHPUnit_Framework_TestCase
{
  public function testIsPolite()
  {
    $a = new DemoApp();
    $this->assertRegExp('/^Hello World from .*/', $a->helloWorld());
  }
}

