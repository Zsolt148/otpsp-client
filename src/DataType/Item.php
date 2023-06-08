<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\DataType;

class Item extends Base
{
    /**
     * @var string
     */
    public $ref = '';

    /**
     * @var string
     */
    public $title = '';

    /**
     * @var string
     */
    public $description = '';

    /**
     * @var int
     */
    public $amount = 0;

    /**
     * Nett price.
     *
     * @var float
     */
    public $price = 0.0;

    /**
     * Percent.
     *
     * @var float
     */
    public $tax = 0;
}
