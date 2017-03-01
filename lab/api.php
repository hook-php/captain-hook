<?php

use CaptainHook\CaptainHook;
use CaptainHook\RequestBin\Middleware\Broker;

/* @var $hooks CaptainHook */
$hooks->with($receiver);

// Middelwares stack

[
    // Store requests and return 200 immediatly
    new Broker,


];
