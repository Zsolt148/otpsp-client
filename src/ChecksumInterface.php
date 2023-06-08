<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient;

interface ChecksumInterface
{
    public function calculate(string $secretKey, string $data): string;

    public function verify(string $secretKey, string $data, string $checksum): bool;
}
