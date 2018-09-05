<?php
use yii\helpers\Html;
use machour\yii2\notifications\widgets\NotificationsWidget;

/* @var $this \yii\web\View */
/* @var $content string */

NotificationsWidget::widget([
    'theme' => NotificationsWidget::THEME_GROWL,
    'clientOptions' => [
        'location' => 'br',
    ],
    'counters' => [
        '.notifications-header-count',
        '.notifications-icon-count'
    ],
    'listSelector' => '#notifications',
]);
?>

?>
<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?= Html::img(Yii::$app->user->identity->profile->getAvatarUrl(56), [
                            'class' => 'img-circle',
                            'alt' => Yii::$app->user->identity->username,
                        ]) ?><?= Yii::$app->user->identity->getFullName()?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            <?= Html::a('<span>Profile</span>', ['/user/settings/profile'])?>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">Help</a>
                        </li>
                        <li>
                            <?= Html::a(
                                "<i class=\"fa fa-sign-out pull-right\"></i>Sign out",
                                ['/user/security/logout'],
                                ['data-method' => 'post']
                            ) ?>

                        </li>
                    </ul>
                </li>
                <!-- Notification Wrapper Menu start (added: 5/09/2561) -->
                <li role="presentation" class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-green label label-warning notifications-icon-count">0</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li class="header">You have <span class="notifications-header-count">0</span> notifications</li>
                        <li>
                            <ul class="menu">
                                <div id="notifications"></div>
                            </ul>
                        </li>
                        <li class="footer">
                            <div class="text-center">
                                <a href="#">View all</a> / <a href="#" id="notification-seen-all">Mark all as seen</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Notification Wrapper Menu end (added: 5/09/2561) -->
            </ul>
        </nav>
    </div>

</div>
<!-- /top navigation -->

