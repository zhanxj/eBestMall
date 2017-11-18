<?php
/**
 * eBestMall - Frontend 前端基础控制器
 * ============================================================================
 * Copyright 2015-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768 & 13391528  Time: 2017/11/17 14:05
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller as BaseController;

class Controller extends BaseController
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        Yii::$app->language = 'zh-CN';
    }
}