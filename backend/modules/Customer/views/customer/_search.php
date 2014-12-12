<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Customer\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'weixin') ?>

    <?= $form->field($model, 'qq') ?>

    <?php // echo $form->field($model, 'concat') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'marry_date') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'last_modify') ?>

    <?php // echo $form->field($model, 'entry_admin') ?>

    <?php // echo $form->field($model, 'track_amdin') ?>

    <?php // echo $form->field($model, 'reception_admin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
