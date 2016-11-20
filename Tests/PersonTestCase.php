<?php
/**
 * Created by PhpStorm.
 * User: tanbt
 * Date: 20/11/2016
 * Time: 07:51
 */

namespace JenkinsPractice\Tests;

use JenkinsPractice\Person;

class PersonTestCase extends \PHPUnit_Framework_TestCase
{
    function testSayHello(){
        $man = new Person();
        $expect = "Hello Jenkins.";
        $this->assertEquals($expect, $man->sayHello());
    }
}