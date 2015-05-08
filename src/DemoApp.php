<?php

class DemoApp
{
  public function __construct()
  {
  }

  public function helloWorld()
  {
    return "Hello World from " . gethostname();
  }

}
