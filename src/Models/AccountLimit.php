<?php

namespace Vdhicts\Rebrandly\Models;

class AccountLimit
{
    /**
     * The resource type.
     * @var string
     */
    private $type;

    /**
     * How many resources of the given type used.
     * @var int
     */
    private $used;

    /**
     * How many resources of the given type the account is allowing.
     * @var int
     */
    private $max;
}
