<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\widgets\DatePicker;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */

$this->title = '添加新回访';
$this->params['breadcrumbs'][] = ['label' => '回访管理', 'url' => ['index']];

$visit_result = Yii::$app->params['visit_result'];
?>

<?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
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

    <div class="row">
        <div class="col-xs-12">
            <!-- ?= $this->render('_form', ['model' => $model,]) ? -->

                <?= $form->field($model, 'result')->widget(
                                        Select2::className(),
                                        ['data' => $visit_result,]) ?>

                <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'next_time')->textInput(['id'=>'datepicker']) ?>
        </div>
    </div>
</div>

<div class="modal-footer">
   <?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
   <button type="button" class="btn btn-default" data-dismiss="modal">取&nbsp;消</button>
</div>

<?php ActiveForm::end(); ?>
<!-- ?= $this->registerJs('$("#datepicker").datepicker({autoclose: true,todayHighlight: true});', View::POS_END, 'my-options'); ? -->


                
