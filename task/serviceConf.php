<?php
/*
 * 进程服务配置文件.
 * @author xiaoliang
 * 您可以自由使用该源码，但是在使用过程中，请保留作者信息。尊重他人劳动成果就是尊重自己
 * */
return $config = [
    'serviceMark'      => ':memberConfig', //服务标识

    // 资源相关
    'redis'            => [
        'host'  => '127.0.0.1',
        'port'  => '6379',
        'preKey'=> 'task1-',
        //'password'=>'',
    ],

    // exec任务相关,name的名字不能相同
    'exec'      => [
        [
            'files' => 'modules/member_1',// 文件路径，相对于业务目录。如:task/modules/member_1.php
            'max_request' => 0, // 限制进程最大请求数 0=不限制请求书  >0超出销毁
            'memory_limit' => 50, // 单位:MB 最大内存限制，超出将自动销毁重新启动
            'workNum'   => 2
        ],
    ],
];
