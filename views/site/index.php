<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'Message Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>



    <h1><?= Html::encode($this->title) ?></h1>

    <h2>Input the following fields to send your message:</h2>

    <?php $form = ActiveForm::begin([
        'id' => 'send-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

<div class="col-md-6">
            <pre><span id="response"></span></pre>
        </div>

        <div class="col-md-6">
            <div class="col-sm-6 col-offset-sm-3">
                <input id="phone" type="text" class="form-control" placeholder="Your phone number">
            </div>
            <p><a class="btn btn-success btn-sm" role="button" id="sendSms">Send SMS</a></p>
            
        </div>


        <?= $form->field($model, 'name')->hiddenInput(['value' => $user->name])->label(false);

    ?>
    <?= $form->field($model, 'contact')->textarea()
        ->label('To'); ?>
    <?= $form->field($model, 'messsage')->textarea()
        ->label('Text Message'); ?>

   





    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('send', ['class' => 'btn btn-primary', 'name' => 'doctors-button']) ?>
           <? echo Icon::show('user', ['class'=>'fa-2x'], Icon::FA); ?>
        
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        <strong>Click the SAVE button to Enter Information</strong> .<br></code>.
    </div>
</div>