<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\modules\Customer\models\Customer */

$this->title = '客户修改: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];

$sourceModules = Yii::$app->getModule('source');
$source = $sourceModules->getSource();

$type = Yii::$app->params['customer_type'];
?>
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


<div class="modal-header bg-primary">
  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <h4 class="modal-title"><?= Html::encode($this->title) ?></h4>
</div>
<div class="model-body">
    <?= $form->field($model, 'name')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'weixin')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'qq')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'concat')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'marry_date')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 512]) ?>

    <?= $form->field($model, 'source')->widget(
                            Select2::className(),
                            ['data' => $source,
                             ]) ?>
 
    <?= $form->field($model, 'type')->widget(
                            Select2::className(),
                            [
                                'data' => $type,
                             ]) ?>
 

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

</div>
<div class="modal-footer">
   <?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   <button type="button" class="btn btn-default" data-dismiss="modal">取&nbsp;消</button>
</div>
<?php ActiveForm::end(); ?>
