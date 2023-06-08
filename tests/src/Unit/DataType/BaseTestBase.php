<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\Tests\Unit\DataType;

use Zsolt148\OtpspClient\DataType\Base;
use PHPUnit\Framework\TestCase;

abstract class BaseTestBase extends TestCase
{
    /**
     * @var string|Base
     */
    protected $className = '';

    abstract public function casesSetState();

    /**
     * @dataProvider casesSetState
     */
    public function testSetState(Base $expected, array $data)
    {
        static::assertEquals($expected, $this->className::__set_state($data));
    }

    abstract public function casesExportData(): array;

    /**
     * @dataProvider casesExportData
     */
    public function testExportData(array $expected, Base $classInstance): void
    {
        static::assertSame($expected, $classInstance->exportData());
    }
}
