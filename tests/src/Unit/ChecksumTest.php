<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\Tests\Unit;

use Zsolt148\OtpspClient\Checksum;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Zsolt148\OtpspClient\Checksum<extended>
 */
class ChecksumTest extends TestCase
{

    public function casesVerify()
    {
        return [
            'empty' => [true, 'test-secret-key', '', ''],
            'basic' => [
                true,
                'test-secret-key',
                'myData01',
                'Jim7CW0IoeCG9jQEvLa7uUQmu1Um4sz8z2Sa5GMgCWVRWWtGkjEemeCdQ2neeGTR',
            ],
        ];
    }

    /**
     * @dataProvider casesVerify
     */
    public function testVerify(bool $expected, string $secretKey, string $data, string $checksum)
    {
        static::assertSame($expected, (new Checksum())->verify($secretKey, $data, $checksum));
    }
}
