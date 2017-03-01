<?php

namespace CaptainHook;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;

final class Webhooks
{
    /**
     * Sends the PSR-7 Response.
     *
     * @param RequestInterface $request The HTTP request.
     * @param ResponseInterface $response The HTTP response.
     * @param callable $next The next middleware in the queue.
     *
     * @return Response
     *
     */
    public function __invoke(RequestInterface $request, ResponseInterface $response, callable $next): ResponseInterface
    {

    }
}
