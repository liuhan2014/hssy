<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\Source\models\Source */

$this->title = $model->name;
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
	</br>
	<?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
	
	<?= $form->field($model, 'desc')->textInput(['maxlength' => 512]) ?>
	
	<?= $form->field($model, 'person')->textInput(['maxlength' => 16]) ?>
	
	<?= $form->field($model, 'phone')->textInput(['maxlength' => 32]) ?>
  </div>
  <div class="modal-footer">
 	 <?= Html::submitButton($model->isNewRecord ? '创&nbsp;建' : '修&nbsp;改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
 	 <button type="button" class="btn btn-default" data-dismiss="modal">取&nbsp;消</button>
  </div>
<?php ActiveForm::end(); ?>
