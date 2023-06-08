<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\Tests\Unit\DataType;

use Zsolt148\OtpspClient\DataType\BackResponse;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Zsolt148\OtpspClient\DataType\BackResponse
 */
class BackResponseTest extends TestCase
{
    public function casesSetState(): array
    {
        $basicBackResponse = new BackResponse();
        $basicBackResponse->responseCode = 42;
        $basicBackResponse->transactionId = 43;
        $basicBackResponse->event = 'test-event';
        $basicBackResponse->merchant = 'test-merchant';
        $basicBackResponse->orderId = 'test-order-id';

        return [
            'empty' => [new BackResponse(), []],
            'basic' => [
                $basicBackResponse,
                [
                    'r' => 42,
                    't' => 43,
                    'e' => 'test-event',
                    'm' => 'test-merchant',
                    'o' => 'test-order-id',
                ]
            ]
        ];
    }

    /**
     * @dataProvider casesSetState
     */
    public function testSetState(BackResponse $expected, array $values): void
    {
        static::assertEquals($expected, BackResponse::__set_state($values));
    }
}
