<?php
use yii\helpers\Html;
use app\assets\MultitabsMaterial;
/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);
    MultitabsMaterial::register($this);
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->params['language']?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode(Yii::$app->params['name']) ?></title>
        <?php $this->head() ?>
    </head>
    <body scroll="no" class="hold-transition <?= \dmstr\helpers\AdminLteHelper::skinClass() ?> sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>
        <div id="content_wrapper" class="content-wrapper" style="height: 100% !important;">
        <?= $content ?>
      </div>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>

<script type="text/javascript">

    $(document).ready(function(){
        $(document).on('click','#logout',function(){
            $(".mt-close-all-tabs").click();
            window.location.href = $(this).attr("href");
            return false;
        });

        $('#content_wrapper').multitabs({
            showClose : false,                          //当值为false，仅在鼠标悬浮时显示关闭按钮。true时一直显示
            draggable : true,                           //nav tab 可拖动选项
            fixed : false,                              //固定标签头列表
            layout : 'default',                         //有两种模式，'default', 'classic'(所有隐藏tab都在下拉菜单里) 和 'simple'
            style : 'nav-tabs',                         //可以为nav-tabs 或 nav-pills
            link : '.multitabs',                        //触发multitabs的selector text，注意需要有".","#"等
            iframe : true,                             //iframe模式的总局设置。当值为false的时候，为智能模式，自动判断（内网用ajax，外网用iframe）。缺省为false。
            //class : 'multitabs',                                 //主框架的class
            //type : 'info',                              //此处可以指定缺省标签页类型名称，一般不需要修改。
            init : [                                    //需要在初始加载的tab
                {
                    type :'main',                           //标签页的类型，有 main | info，缺省为 info
                    title : '主页',                         //标题（可选），没有则显示网址
                    iframe:true,
                    content: '',                        //html内容，如果设定此值，下面的URL设定则无效
                    url : '/site/dashboard'                            //链接
                }

            ],
            navBar : {
                //class : '',                             //为navBar添加class
                maxTabs : 15,                           //最多tab数量。（main和editor不计算在内) 当为1时，整个标签栏隐藏。main和editor分别只能有1个标签。
                maxTabTitleLength : 25,                 //tab标题的最大长度
                backgroundColor : '#f5f5f5',            //默认nav-bar 背景颜色
            },
            ajaxTabPane : {
                //class : '',                             //为ajax tab-pane 添加class
            },
            iframeTabPane : {
                class : 'testframe',                             //为iframe tab-pane 添加class
            },
            language : {                                //语言配置
                navBar : {
                    title : 'Tab',                                  //默认的标签页名称
                    dropdown : '<i class="fa fa-bars"></i>',        //标签栏的下拉菜单名称
                    showActivedTab : '显示激活页面',          //下拉菜单的显示激活页面
                    closeAllTabs : '关闭所有页面',                //下拉菜单的关闭所有页面
                    closeOtherTabs : '关闭其他页面',           //下拉菜单的关闭其他页面
                }
            },
            ajaxSuccess : function (htmlCallBack) {
                //自行修改 success 的 html 后返回
                return htmlCallBack;
            },
            ajaxError : function (htmlCallBack) {
                //自行修改 error 的 html 后返回
                return htmlCallBack;
            }
        });
        $('.sidebar-menu li').on('click',function () {
            $("html,body").animate({scrollTop:0}, 500);
            var s = $(this).parent().parent('li');
            if(s.length > 0) {
                s.siblings().children().find('li').removeClass('active');
            }
            $(this).addClass('active').siblings().removeClass('active');
        });

    })
</script>
<style type="text/css">
    .testframe{
        border:none;
        height:100%;
        overflow: auto;
        min-height: 85vh;
    }
</style>