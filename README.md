# Laravel 5.4 Wechat

Laravel微信基础模块，提供微信用户资料模型及微信账号的配置信息

> 本模块不依赖用户模块，数据表里的`user_id`可以由开发者通过事件关联到用户表

> 依赖`overtrue/laravel-wechat:~3.0`作服务层

> 自动依赖`andersao/l5-repository`模块，但不需要注册

> 请不要单独安装本模块，没有什么作用，它的存在是为了给其它模块提供依赖支持



## 安装

1. 通过composer安装
    ```shell
    composer require goodwong/laravel-wechat
    ```

4. 打开config/app.php，在providers数组里注册服务：
    ```php
    Goodwong\LaravelWechat\WechatServiceProvider::class,
    Overtrue\LaravelWechat\ServiceProvider::class,
    ```
3. 创建配置文件：
    ```shell
    php artisan vendor:publish --provider="Overtrue\LaravelWechat\ServiceProvider"
    ```

4. 请修改应用根目录下的 config/wechat.php 中对应的项即可；

5. 创建数据库
    ```shell
    php artisan migrate
    ```

## 事件

1. `Goodwong\LaravelWechat\Events\WechatUserAuthorized`微信授权
    可以监听此事件用于登录系统用户

2. `Goodwong\LaravelWechat\Events\WechatUserCreated`微信用户创建完毕
    可以监听此事件用于同步创建系统用户


## 操作

1. 创建微信用户
    ```php
    $creator = app('Goodwong\LaravelWechat\Handlers\CreateWechatUserHandler');
    $wechatUser = $creator->create($attributes);
    ```

2. 查询微信用户
    ```php
    $repository = app('Goodwong\LaravelWechat\Repositories\WechatUserRepository');
    $wechatUser = $repository->find($id);
    $wechatUsers = $repository->all();
    // ... 更多参见andersao/l5-repository文档
    ```


