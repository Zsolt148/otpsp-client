<?php

declare(strict_types = 1);

namespace Zsolt148\OtpspClient\DataType;

class Urls extends Base
{
    /**
     * @var string
     */
    public $success = '';

    /**
     * @var string
     */
    public $fail = '';

    /**
     * @var string
     */
    public $cancel = '';

    /**
     * @var string
     */
    public $timeout = '';
}
