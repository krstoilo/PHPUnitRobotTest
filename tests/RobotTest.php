<?php

use PHPUnit\Framework\TestCase;

class RobotTest extends TestCase
{
    public function testIfRobotHasAName(){
        
        $robocop = new Robot("Robocop", "1");
        
        $this->assertEquals("Robocop", $robocop->name);
    }

    public function testIfRobotIsOffByDefault()
    {
        $robocop = new Robot("Robocop", "1");
        $this->assertEquals(false, $robocop->getState());
    }
    
}