<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Expense */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="expense-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'exp_date')->widget(
          DatePicker::className(), [
              // inline too, not bad
               'inline' => false,
               // modify template for custom rendering
              //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
              'clientOptions' => [
                  'autoclose' => true,
                  'format' => 'yyyy-mm-dd'
              ]
    ]);?>

    <?= $form->field($model, 'amount')->textInput() ?>

  <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
