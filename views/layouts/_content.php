<?php

use yii\widgets\Breadcrumbs;

?>
<!-- page content -->
<div class="right_col" role="main">
    <?php if (isset($this->params['content-header']) || isset($this->params['breadcrumbs'])): ?>
        <div class="page-title">
            <div class="title_left">
                <h2><?= isset($this->params['content-header']) ? $this->params['content-header'] : '' ?></h2>
            </div>
            <div class="title_right">
                <div class="col-md-8 col-sm-8 col-xs-12 form-group pull-right">
                    <div class="pull-right">
                        <?= Breadcrumbs::widget(
                            [
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="clearfix"></div>

    <?= $content ?>
</div>
<!-- /page content -->
<!-- footer content -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016 <a href="http://www.edutechinnovations.co.th">Edutech Innovations Co.,Ltd.</a>.</strong> All rights
    reserved.
</footer>
