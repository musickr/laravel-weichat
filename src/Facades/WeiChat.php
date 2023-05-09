<?php

namespace Musickr\WeiChat\Facades;

use Illuminate\Support\Facades\Facade;

class WeiChat extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'WeiChat';
    }
}
