<?php

/*
 * Soluble Japha
 *
 * @link      https://github.com/belgattitude/soluble-japha
 * @copyright Copyright (c) 2013-2017 Vanvelthem Sébastien
 * @license   MIT License https://github.com/belgattitude/soluble-japha/blob/master/LICENSE.md
 */

namespace SolubleTest\Japha\Bridge\Driver\Pjb62\Utils;

use Soluble\Japha\Bridge\Driver\Pjb62\Utils\HelperFunctions;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-13 at 10:21:03.
 */
class HelperFunctionsTest extends TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testSessionLifeTime()
    {
        $lifetime = HelperFunctions::java_get_session_lifetime();
        self::assertEquals(ini_get('session.gc_maxlifetime'), $lifetime);
    }

    public function testTruncate()
    {
        $str = HelperFunctions::java_truncate('hello');
        self::assertEquals('hello', $str);

        $str2 = implode('', array_fill(0, 1000, 'a'));
        $str3 = HelperFunctions::java_truncate($str2);
        self::assertContains('[...]', $str3);
    }
}
