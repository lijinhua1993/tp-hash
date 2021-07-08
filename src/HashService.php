<?php

declare (strict_types=1);

namespace LiJinHua\Hash;

use LiJinHua\Hash\Commands\ConfigCommand;

class HashService extends \think\Service
{
    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
        $this->app->bind('hash', function () {
            return new HashManager($this->app);
        });

        $this->app->bind('hash.driver', function () {
            return $this->app['hash']->driver();
        });
    }

    /**
     * 执行服务
     *
     * @return mixed
     */
    public function boot()
    {
        $this->commands(ConfigCommand::class);
    }
}
