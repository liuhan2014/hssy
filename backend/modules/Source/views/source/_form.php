<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="source-form">

    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                        'options' => ['enctype' => 'multipart/form-data'],
                        'fieldConfig' => [
                                'horizontalCssClasses' => [
                                    'label' => 'col-sm-3',
                                    'wrapper' => 'col-sm-8',
                                ],
                             ],
                        ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>

    <?= $form->field($model, 'desc')->textInput(['maxlength' => 512]) ?>

    <?= $form->field($model, 'person')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 32]) ?>

    <!-- ?= $form->field($model, 'create_time')->textInput() ? -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
