<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\Tests\Unit\DataType;

use Zsolt148\OtpspClient\DataType\ResponseBase;
use PHPUnit\Framework\TestCase;

abstract class ResponseBaseTestBase extends TestCase
{

    /**
     * @var string|\Zsolt148\OtpspClient\DataType\ResponseBase
     */
    protected $className = '';

    abstract public function casesSetState(): array;

    /**
     * @dataProvider casesSetState
     */
    public function testSetState(ResponseBase $expected, array $values): void
    {
        static::assertEquals($expected, $this->className::__set_state($values));
    }
}
