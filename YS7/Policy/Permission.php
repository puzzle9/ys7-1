<?php
namespace Neteast\YS7\Policy;

/**
 * 权限
 */
class Permission
{
    /**
     * 修改资源，例如修改设备名称、通道名称
     */
    const UPDATE = 'Update';

    /**
     * 查询资源信息，包括配置信息等
     */
    const GET = 'Get';

    /**
     * 设备完全控制，包括Real、Replay、Capture、Video、Ptz、Upgrade、Format、Pipe、Config等现已定义的设备操作权限和以后定义的设备操作权限
     */
    const DEVCTRL = 'DevCtrl';

    /**
     * 视频预览
     */
    const REAL = 'Real';

    /**
     * 视频回放（包括本地录像回放和云存储回放）
     */
    const REPLAY = 'Replay';

    /**
     * 设备抓图
     */
    const CAPTURE = 'Capture';

    /**
     * 设备录像
     */
    const VIDEO = 'Video';

    /**
     * 	设备云台控制
     */
    const PTZ = 'Ptz';

    /**
     * 设备升级
     */
    const UPGRADE = 'Upgrade';

    /**
     * 格式化设备磁盘
     */
    const FORMAT = 'Format';

    /**
     * 使用开放平台透明通道功能
     */
    const PIPE = 'Pipe';

    /**
     * 配置设备，例如视频加密，布撤防，关联NVR和IPC等
     */
    const CONFIG = 'Config';
}