<?php

namespace Vdhicts\Rebrandly\Models;

use DateTimeInterface;

class Domain
{
    /**
     * Unique identifier for the branded domain.
     * @var string
     */
    private $id;

    /**
     * Full name of the branded domain.
     * @var string
     */
    private $fullName;

    /**
     * The top level domain part of the branded domain name.
     * @var string
     */
    private $topLevelDomain;

    /**
     * UTC creation date/time of the branded domain.
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * UTC last update date/time of the branded domain.
     * @var DateTimeInterface
     */
    private $updatedAt;

    /**
     * Branded domain type, 'service' or 'user'.
     * @var string
     */
    private $type;

    /**
     * Whether the branded domain can be used or not to create branded short links.
     * @var bool
     */
    private $active;
}
