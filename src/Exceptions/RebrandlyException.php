<?php

namespace Vdhicts\Rebrandly\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

class RebrandlyException extends Exception
{
    public static function missingApiKey(): RebrandlyException
    {
        return new self('No API key provided to the client');
    }

    public static function failedRequest(string $message): RebrandlyException
    {
        return new self(sprintf('Request failed, error: `%s`', $message));
    }

    public static function failedHttpStatusCode(
        string $method,
        string $endpoint,
        ResponseInterface $response,
    ): RebrandlyException {
        return new self(sprintf(
            '`%s` request to `%s` resulted in `%d %s`',
            $method,
            $endpoint,
            $response->getStatusCode(),
            $response->getReasonPhrase(),
        ));
    }
}
