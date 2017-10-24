<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->user_name?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => '主页', 'icon' => 'home', 'url' => ['/site/dashboard'],'options'=>['class'=>"multitabs",'data-type'=>"main","data-iframe"=>"true"]],
                    ['label' => '系统设置', 'icon' => 'cog',
                      'items'=>[
                                ['label' => '角色管理', 'icon' => '', 'url' => ['/site/test',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                                ['label' => '商户用户管理', 'icon' => '', 'url' => ['/site/test',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                                ['label' => '代理商用户管理', 'icon' => '', 'url' => ['/site/test',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                      ],
                    ],
                    ['label' => '客户管理', 'icon' => 'user',
                        'items'=>[
                            ['label' => '客户管理', 'icon' => '', 'url' => ['/site/test1',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '客户充值', 'icon' => '', 'url' => ['/gii12',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '银行卡绑定', 'icon' => '', 'url' => ['/gii22',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '验证码', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                        ],
                    ],
                    ['label' => '交易管理', 'icon' => 'tumblr-square',
                        'items'=>[
                            ['label' => '客户提现', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '策略管理', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                        ],
                    ],
                    ['label' => '配置管理', 'icon' => 'gears',
                        'items'=>[
                            ['label' => '参数配置', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '资方账户配置', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '活动配置', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '消息推送', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '推荐股票', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                        ],
                    ],

                    ['label' => '统计查询', 'icon' => 'area-chart',
                        'items'=>[
                            ['label' => '策略流水', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '交易流水', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '代理商佣金报表', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '资方账户查询', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '财务日报表', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                        ],
                    ],

                    ['label' => '代理商管理', 'icon' => 'user-circle-o',
                        'items'=>[
                            ['label' => '我的代理商', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '我的客户', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                            ['label' => '佣金列表', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                        ],
                    ],

                    ['label' => '风控管理', 'icon' => 'warning',
                        'items'=>[
                            ['label' => '个股风控列表', 'icon' => '', 'url' => ['/gii',"tag"=>"new"],'options'=>['class'=>"multitabs",'data-type'=>"info","data-iframe"=>"true"]],
                        ],
                    ],
                ],
            ]
        ) ?>
    </section>
</aside>