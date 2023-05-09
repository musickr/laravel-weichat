<?php
namespace Musickr\WeiChat;
use Illuminate\Support\ServiceProvider;
class WeiChatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //以单例模式注册InviteCode类实例，注意这里注册为InviteCode，后面Facade门面将以InviteCode命名，否则找不到类的实例
        $this->app->singleton('WeiChat', function ($app) {
            return new WeiChat($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //自动发布配置文件，其中invitecode参数为tag
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('weichat.php'),
        ],'weichat');
    }
}
