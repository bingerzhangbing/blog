<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MyTest extends TestCase {

  //???????????
  public function setUp(){
      parent::setUp();
  }
  //????
  public function testIndex()
  {
    $this->call('GET', '/');
    $this->assertResponseOk();
    $this->see('articles');
    $this->see('tags');
  }
    //?????url
  public function testNotFound()
  {
    $this->call('GET', 'test');
    $this->assertResponseStatus(404);
  }
}
