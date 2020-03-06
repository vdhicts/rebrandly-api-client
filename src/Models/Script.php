<?php

namespace Vdhicts\Rebrandly\Models;

class Script
{
    /**
     * Unique identifier of script.
     * @var string
     */
    private $id;

    /**
     * Unique name of the script.
     * @var string
     */
    private $name;

    /**
     * Javascript snippet (enclosed into <script> and </script> HTML tags)
     * @var string
     */
    private $value;

    /**
     * Publicly accessible URL to the script content
     * @var string
     */
    private $uri;
}
