<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerCssFile('/static/css/user.css', ['depends' => app\assets\AppAsset::className()]);
//$this->registerJsFile('/static/js/user.js',['depends' => app\assets\AppAsset::className()]);

$this->title = '会员中心';
$this->params['breadcrumbs'][] = $this->title;

?>

<!--Begin 用户中心 Begin -->
<div class="m_content">
    <div class="m_left">
        <div class="left_n"><a href="javascript:;">会员中心</a></div>
        <div class="left_m">
            <div class="left_m_t"><i class="icon-edit"></i>订单中心</div>
            <ul>
                <li><a href="javascript:;">我的订单</a></li>
                <li><a href="javascript:;">收货地址</a></li>
                <li><a href="javascript:;">缺货登记</a></li>
                <li><a href="javascript:;">跟踪订单</a></li>
            </ul>
        </div>
        <div class="left_m">
            <div class="left_m_t"><i class="icon-user-o"></i>会员信息</div>
            <ul>
                <!--<li><a class="active" href="javascript:;">用户信息</a></li>-->
                <li><a href="javascript:;">用户信息</a></li>
                <li><a href="javascript:;">我的收藏</a></li>
                <li><a href="javascript:;">我的留言</a></li>
                <li><a href="javascript:;">推广链接</a></li>
                <li><a href="javascript:;">我的评论</a></li>
            </ul>
        </div>
        <div class="left_m">
            <div class="left_m_t"><i class="icon-coin-yen"></i>账户中心</div>
            <ul>
                <li><a href="javascript:;">账户安全</a></li>
                <li><a href="javascript:;">我的红包</a></li>
                <li><a href="javascript:;">资金管理</a></li>
            </ul>
        </div>
        <div class="left_m">
            <div class="left_m_t"><i class="icon-banknote"></i>分销中心</div>
            <ul>
                <li><a href="javascript:;">我的会员</a></li>
                <li><a href="javascript:;">我的业绩</a></li>
                <li><a href="javascript:;">我的佣金</a></li>
                <li><a href="javascript:;">申请提现</a></li>
            </ul>
        </div>
    </div>
    <div class="m_right">
        <div class="m_des">
            <table border="0" style="width:870px; line-height:22px;" cellspacing="0" cellpadding="0">
                <tr valign="top">
                    <td width="115"><img src="/static/img/public/user/no_login_default_avatar.jpg" width="90" height="90" /></td>
                    <td>
                        <div class="m_user">Shadow</div>
                        <p>
                            等级：注册用户 <br />
                            <span style="color: #ff4e00">您还差 270 积分达到 分红100</span><br />
                            上一次登录时间: 2017-09-28 18:19:47<br />
                            您还没有通过邮件认证 <a href="javascript:;" style="color:#ff4e00;">点此发送认证邮件</a>
                        </p>
                        <div class="m_notice"><i class="icon-megaphone"></i>
                            用户中心公告！
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="mem_t">资产信息</div>
        <table border="0" class="mon_tab" style="width:870px; margin-bottom:20px;" cellspacing="0" cellpadding="0">
            <tr>
                <td width="33%">用户等级：<span style="color:#555555;">普通会员</span></td>
                <td width="33%">消费金额：<span>￥200元</span></td>
                <td width="33%">返还积分：<span>99R</span></td>
            </tr>
            <tr>
                <td>账户余额：<span>￥200元</span></td></td>
                <td>红包个数：<span style="color:#555555;">3个</span></td></td>
                <td>红包价值：<span>￥50元</span></td></td>
            </tr>
            <tr>
                <td colspan="3">订单提醒：
                    <font style="font-family:'宋体';">待付款(<span>0</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待收货(<span>2</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待评论(<span>1</span>)</font>
                </td>
            </tr>
        </table>

        <div class="mem_t">账号信息</div>
        <table border="0" class="acc_tab" style="width:870px;" cellspacing="0" cellpadding="0">
            <tr>
                <td class="td_l">用户ID： </td>
                <td>12345678</td>
            </tr>
            <tr>
                <td class="td_l b_none">身份证号：</td>
                <td>522124***********8</td>
            </tr>
            <tr>
                <td class="td_l b_none">电  话：</td>
                <td>186****1234</td>
            </tr>
            <tr>
                <td class="td_l">邮   箱： </td>
                <td>*******789@qq.com</td>
            </tr>
            <tr>
                <td class="td_l b_none">注册时间：</td>
                <td>2017/10/10</td>
            </tr>
            <tr>
                <td class="td_l">完成订单：</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="td_l b_none">邀请人：</td>
                <td>邀请人</td>
            </tr>
            <tr>
                <td class="td_l">登录次数：</td>
                <td>3</td>
            </tr>
        </table>

    </div>
</div>
<!--End 用户中心 End-->
