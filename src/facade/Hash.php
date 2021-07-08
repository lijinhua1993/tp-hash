<?php

namespace lijinhua\hash\facade;

use think\Facade;

class Hash extends Facade
{
    protected static function getFacadeClass()
    {
        return 'hash';
    }
}