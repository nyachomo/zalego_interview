<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\User;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">
  <div class="row">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

        <div class="col-sm-4"><?= $form->field($model, 'firstname')->dropDownList(
            ArrayHelper::map(user::find()->all(),'firstname','firstname'),['prompt'=>'select....']
        ) ?></div>

    
       <div class="col-sm-4"> <?= $form->field($model, 'lastname')->dropDownList(
            ArrayHelper::map(user::find()->all(),'lastname','lastname'),['prompt'=>'select....']
        ) ?></div>

        
       <div class="col-sm-4"> <?= $form->field($model, 'username')->dropDownList(
            ArrayHelper::map(user::find()->all(),'username','username'),['prompt'=>'select....']
        ) ?></div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'back'), ['index'], ['class' => 'btn btn-success']) ?>
       
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>
