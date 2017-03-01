<?php

namespace CaptainHook;

use Psr\Http\Message\RequestInterface;

interface Receiver
{
    /**
     *
     * @param RequestInterface $request
     *
     * @return bool
     */
    public function canHandle(RequestInterface $request): bool;
}
