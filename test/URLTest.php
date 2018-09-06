<?php
/**
 * Created by PhpStorm.
 * User: macintoshhd
 * Date: 9/4/18
 * Time: 2:14 PM
 */

namespace Tests;

use PHPUnit\Framework\TestCase;

class URLTest extends TestCase
{
    public function testAssertDataTrue()
    {
        $data = true;
        $this->assertTrue($data);
    }
}