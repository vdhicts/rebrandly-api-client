<?php

namespace Vdhicts\Rebrandly\Models;

use DateTimeInterface;

class AccountSubscription
{
    /**
     * UTC subscription date/time of the account's current plan.
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * UTC expiration date/time of the account's current plan, when plan's category is not free.
     * @var DateTimeInterface
     */
    private $expiredAt;

    /**
     * Account's resources usage and limits: how many links/domains/tags/etc created so far and which are the maximum
     * limits.
     * @var array<AccountLimit>
     */
    private $limits = [];
}
