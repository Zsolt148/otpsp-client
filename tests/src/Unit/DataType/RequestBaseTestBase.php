<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\Tests\Unit\DataType;

use Zsolt148\OtpspClient\DataType\RequestBase;
use PHPUnit\Framework\TestCase;

abstract class RequestBaseTestBase extends TestCase
{
    /**
     * @var string|\Zsolt148\OtpspClient\DataType\RequestBase
     */
    protected $className = '';

    abstract public function casesSetState();

    /**
     * @dataProvider casesSetState
     */
    public function testSetState(RequestBase $expected, array $data)
    {
        static::assertEquals($expected, $this->className::__set_state($data));
    }

    abstract public function casesJsonSerialize();

    /**
     * @dataProvider casesJsonSerialize
     */
    public function testJsonSerialize(array $expected, RequestBase $request)
    {
        static::assertSame($expected, $request->jsonSerialize());
    }
}
