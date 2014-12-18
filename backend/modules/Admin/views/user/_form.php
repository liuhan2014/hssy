<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//	use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Admin\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                        'options' => ['enctype' => 'multipart/form-data'],
                        'fieldConfig' => [
                                'horizontalCssClasses' => [
                                    'label' => 'col-sm-3',
                                    'wrapper' => 'col-sm-9',
                                ],
                             ],
                        ]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <!-- ?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ? -->
    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

    <!-- ?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ? -->

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>
    <!-- ?= $form->field($model, 'role')->textInput() ? -->
    <!-- ?= $form->field($model, 'status')->textInput() ? -->
    <!-- ?= $form->field($model, 'created_at')->textInput() ? -->
    <!-- ?= $form->field($model, 'updated_at')->textInput() ? -->

    <div class="clearfix form-actions">
	<div class="col-md-offset-2 col-md-9">
            <?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
	</div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
