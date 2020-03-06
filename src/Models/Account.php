<?php

namespace Vdhicts\Rebrandly\Models;

use DateTimeInterface;

class Account
{
    /**
     * Unique identifier of the account.
     * @var string
     */
    private $id;

    /**
     * Username used in login.
     * @var string
     */
    private $username;

    /**
     * Contact email of the account.
     * @var string
     */
    private $email;

    /**
     * Full name of the account owner.
     * @var string
     */
    private $fullName;

    /**
     * URL of the account avatar.
     * @var string
     */
    private $avatarUrl;

    /**
     * UTC creation date/time of the account.
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * Set of feature/limits info related to the account and its plan.
     * @var AccountSubscription
     */
    private $subscription;
}
