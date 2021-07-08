<?php

namespace LiJinHua\Hash\Facades;

use think\Facade;

class Hash extends Facade
{
    protected static function getFacadeClass()
    {
        return 'hash';
    }
}