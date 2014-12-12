<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */
/* @var $form yii\widgets\ActiveForm */
$visit_result = Yii::$app->params['visit_result'];
?>

<div class="source-form">

    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                        'options' => ['enctype' => 'multipart/form-data'],
                        'fieldConfig' => [
                                'horizontalCssClasses' => [
                                    'label' => 'col-sm-2',
                                    'wrapper' => 'col-sm-8',
                                ],
                             ],
                        ]); ?>
    <!-- ?= $form->field($model, 'customer_id')->textInput() ? -->
    <?= $form->field($model, 'result')->widget(
                            Select2::className(),
                            [
                                'data' => $visit_result,
                                //'options' => ['placeholder' => '请选择组...'],
                             ]) ?>
    <!-- ?= $form->field($model, 'result')->textInput() ? -->

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'next_time')->textInput() ?>

    <div class="form-group ">
    </div>


    <div class="clearfix form-actions">
	<div class="col-md-offset-2 col-md-9">
        	<?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	</div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
