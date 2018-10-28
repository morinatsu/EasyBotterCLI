<?php
use PHPUnit\Framework\TestCase as TestCase;

use EasyBotterCLI\EasyBotter as EasyBotter;

require_once(dirname(__FILE__). '/../vendor/autoload.php');
require_once(dirname(__FILE__). '/../EasyBotter.php');

class EasyBotterTest extends TestCase
{

    private $target = null;

    public function setUp()
    {
        $this->target = new EasyBotter();
    }

    /**
     *  @test
     */
    public function testInstance()
    {
        $this->assertInstanceOf(EasyBotter::class, $this->target);
    }
}
