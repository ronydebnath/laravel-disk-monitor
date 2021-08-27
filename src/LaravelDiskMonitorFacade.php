<?php

namespace Rony\LaravelDiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rony\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
