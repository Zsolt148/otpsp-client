<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\DataType;

class ResponseBase
{
    public static function __set_state($values)
    {
        $instance = new static();
        $properties = array_keys(get_object_vars($instance));
        foreach ($values as $key => $value) {
            if (!in_array($key, $properties)) {
                continue;
            }

            $instance->{$key} = $value;
        }

        return $instance;
    }

    /**
     * @var string
     */
    public $salt = '';

    /**
     * @var string
     */
    public $merchant = '';

    /**
     * @var string
     */
    public $orderRef = '';

    /**
     * @var string
     */
    public $currency = '';

    /**
     * @var int
     */
    public $transactionId = 0;
}
