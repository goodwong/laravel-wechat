<?php

/**
 * 微信配置
 * 
 * 参考：https://easywechat.org/zh-cn/docs/configuration.html
 */

return [
    /**
     * 配置参数，在公众号平台里获取
     */
    'app_id' => env('WECHAT_APPID', 'your-app-id'),
    'secret' => env('WECHAT_SECRET', 'your-app-secret'),
];