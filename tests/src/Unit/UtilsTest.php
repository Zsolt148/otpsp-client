<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\Tests\Unit;

use Zsolt148\OtpspClient\Utils;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Zsolt148\OtpspClient\Utils
 */
class UtilsTest extends TestCase
{
    public function casesGetQueryFromUrl(): array
    {
        return [
            'invalid url' => [[], 'test'],
            'basic' => [
                [
                    'a' => '42',
                    'b' => 'query-variable'
                ],
                'http://example.com?a=42&b=query-variable',
            ],
        ];
    }

    /**
     * @dataProvider casesGetQueryFromUrl
     */
    public function testCasesGetQueryFromUrl(array $expected, string $url): void
    {
        static::assertSame($expected, Utils::getQueryFromUrl($url));
    }
}
