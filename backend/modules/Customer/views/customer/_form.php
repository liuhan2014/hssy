<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
// use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Customer\models\Customer */
/* @var $form yii\widgets\ActiveForm */

$sourceModules = Yii::$app->getModule('source');
$source = $sourceModules->getSource();

$type = Yii::$app->params['customer_type'];
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                        'options' => ['enctype' => 'multipart/form-data'],
                        'fieldConfig' => [
                                'horizontalCssClasses' => [
                                    'label' => 'col-sm-2',
                                    'wrapper' => 'col-sm-4',
                                ],
                             ],
                        ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'weixin')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'concat')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'marry_date')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 512]) ?>

    <!-- ?= $form->field($model, 'source')->textInput() ? -->
    <?= $form->field($model, 'source')->widget(
                            Select2::className(),
                            [
                                'data' => $source,
                                //'options' => ['placeholder' => '请选择组...'],
                             ]) ?>
 
    <?= $form->field($model, 'type')->widget(
                            Select2::className(),
                            [
                                'data' => $type,
                             ]) ?>
 

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <!-- ?= $form->field($model, 'status')->textInput() ? -->
    <!-- ?= $form->field($model, 'create_time')->textInput() ? -->
    <!-- ?= $form->field($model, 'last_modify')->textInput() ? -->
    <!-- ?= $form->field($model, 'entry_admin')->textInput() ? -->
    <!-- ?= $form->field($model, 'track_amdin')->textInput() ? -->
    <!-- ?= $form->field($model, 'reception_admin')->textInput() ? -->
    <div class="clearfix form-actions">
	<div class="col-md-offset-2 col-md-9">
        	<?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
