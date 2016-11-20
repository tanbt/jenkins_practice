<?php
/**
 * Created by PhpStorm.
 * User: tanbt
 * Date: 20/11/2016
 * Time: 07:31
 *
 * PHPUnit: example from https://bitbucket.org/trungtan/phpunit_practice
 */

include_once("vendor/autoload.php");
use JenkinsPractice\Person;

$man = new Person();
echo $man->sayHello();