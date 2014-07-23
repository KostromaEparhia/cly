<?php

/* @var $this yii\web\View */
/* @var $model \frontend\models\ShowContent */


$this->title = 'Костромская епархия Русской Православной Церкви (Московский Патриархат)';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-8">
                <h2><?= $model->content->title ?></h2>
                <p><?= $model->content->text;  ?></p>
            </div>
        </div>

    </div>
</div>
