<?php

namespace Vdhicts\Rebrandly\Models;

use DateTimeInterface;

class Link
{
    /**
     * Unique identifier associated with the branded short link.
     * @var string
     */
    private $id;

    /**
     * A title you assign to the branded short link in order to remember what's behind it.
     * @var string
     */
    private $title;

    /**
     * The keyword section of your branded short link.
     * @var string
     */
    private $slashtag;

    /**
     * The destination URL you want your branded short link to point to.
     * @var string
     */
    private $destination;

    /**
     * The full branded short link URL, including domain.
     * @var string
     */
    private $shortUrl;

    /**
     * A reference to the branded domain's resource of a branded short link.
     * @var Domain
     */
    private $domain;

    /**
     * The UTC date/time this branded short link was created.
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * The last UTC date/time this branded short link was updated.
     * @var DateTimeInterface
     */
    private $updatedAt;

    /**
     * How many clicks there are on this branded short link so far.
     * @var int
     */
    private $clicks;

    /**
     * The UTC date/time this branded short link was last clicked on.
     * @var DateTimeInterface|null
     */
    private $lastClickAt;

    /**
     * Whether a link is favourited (loved) or not.
     * @var bool
     */
    private $favourite;

    /**
     * Whether query parameters in short URL will be forwarded to destination URL.
     * @var bool
     */
    private $forwardParameters;
}
