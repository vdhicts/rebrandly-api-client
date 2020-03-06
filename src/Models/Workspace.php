<?php

namespace Vdhicts\Rebrandly\Models;

use DateTimeInterface;

class Workspace
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $avatarUrl;

    /**
     * @var int
     */
    private $links;

    /**
     * @var int
     */
    private $teamMates;

    /**
     * @var int
     */
    private $domains;

    /**
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * @var DateTimeInterface
     */
    private $updatedAt;
}
