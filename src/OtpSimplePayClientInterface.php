<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient;

use Zsolt148\OtpspClient\DataType\BackResponse;
use Zsolt148\OtpspClient\DataType\PaymentRequest;
use Zsolt148\OtpspClient\DataType\PaymentResponse;
use Zsolt148\OtpspClient\DataType\RefundRequest;
use Zsolt148\OtpspClient\DataType\InstantPaymentNotification;
use Zsolt148\OtpspClient\DataType\RefundResponse;
use Zsolt148\OtpspClient\DataType\RequestBase;
use DateTimeInterface;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface OtpSimplePayClientInterface
{

    /**
     * In PHP 7.1 \DateTimeInterface::RFC3339 is not available.
     *
     * @see \DateTimeInterface::RFC3339
     */
    const DATETIME_FORMAT = 'Y-m-d\TH:i:sP';

    public function getBaseUri(): string;

    /**
     * @return $this
     */
    public function setBaseUri(string $baseUri);

    /**
     * @return mixed
     */
    public function setBaseUriByMode(string $mode);

    public function getClient(): ClientInterface;

    /**
     * @return $this
     */
    public function setClient(ClientInterface $client);

    public function getChecksum(): ChecksumInterface;

    /**
     * @return $this
     */
    public function setChecksum(ChecksumInterface $checksum);

    public function getNow(): DateTimeInterface;

    /**
     * @return $this
     */
    public function setNow(DateTimeInterface $now);

    public function getSecretKey(): string;

    /**
     * @return $this
     */
    public function setSecretKey(string $secretKey);

    /**
     * @return string[]
     */
    public function getSupportedLanguages(): array;

    public function startPayment(PaymentRequest $paymentRequest): PaymentResponse;

    public function startRefund(RefundRequest $refundRequest): RefundResponse;

    public function parseBackResponse(string $url): BackResponse;

    public function parseInstantPaymentNotificationRequest(RequestInterface $request): ?InstantPaymentNotification;

    public function parseInstantPaymentNotificationMessage(
        string $signature,
        string $bodyContent
    ): ?InstantPaymentNotification;

    public function getInstantPaymentNotificationSuccessResponse(InstantPaymentNotification $ipn): ResponseInterface;

    public function getInstantPaymentNotificationSuccessParts(InstantPaymentNotification $ipn): array;

    public function sendRequest(RequestBase $requestType, string $path): ResponseInterface;
}
