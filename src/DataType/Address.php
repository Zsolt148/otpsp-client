<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\DataType;

class Address extends Base
{
    /**
     * @var string
     */
    public $name = '';

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $country = '';

    /**
     * @var string
     */
    public $state = '';

    /**
     * @var string
     */
    public $city = '';

    /**
     * @var string
     */
    public $zip = '';

    /**
     * @var string
     */
    public $address = '';

    /**
     * @var string
     */
    public $address2 = '';

    /**
     * @var string
     */
    public $phone;
}
