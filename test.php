<?php
/**
 * Created by PhpStorm.
 * User: 12811
 * Date: 2019/3/31
 * Time: 18:59
 */
require(__DIR__ . '/vendor/autoload.php');

$linfo = new \Linfo\Linfo;
$parser = $linfo->getParser();
//var_dump($parser->getMounts());

$data = [
    'type' => 'server',
    'action' => 'refresh',
    'data' => [
        'time'=>date('H:i:s', time()), // 时间戳
        'CPU'=>$parser->getCPU(), //cpu型号
        'Hostname'=>$parser->getHostname(),//服务器主机名
        'Ram'=>$parser->getRam(),//内存情况
        'OS'=>$parser->getOS(),//操作系统
        'Net'=>$parser->getNet(),//网络使用情况
        'UpTime'=>$parser->getUpTime(),//服务器运行时间
        'ProcessStats'=>$parser->getProcessStats(),//运行过程统计数据
        'Model'=>$parser->getModel(),//模式
        'Battery'=>$parser->getBattery(),//电池信息
        'HD'=>$parser->getHD(),//硬盘、磁盘
//        'Virtualization'=>$parser->getVirtualization(),//虚拟主机信息
        'Load'=>$parser->getLoad(),//Load
    ]
];

var_dump($data);