<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admission */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="kiosk-form">

    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'class' => 'kiosk__search-form' ], 'method' => 'GET', 'action' => Url::to(['site/admission'])]); ?>

    <?= $form->field($searchModel, 'full_name')->textInput(['class' => 'form-control kiosk-form__input', 'maxlength' => 200, 'placeholder' => Yii::t('site', 'Введите имя или ИИН пациента')])->label(false) ?>

    <div class="form-group kiosk__submit">
        <?= Html::submitButton(Yii::t('site', 'Искать'), ['class' => 'kisok-form__btn btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>