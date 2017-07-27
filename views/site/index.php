<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'My Yii Application';
?>
<div class="row">
    <div class="col-md-12">
        <?php $form = ActiveForm::begin([
                'id' => 'contact-form',
                'action' => '/api/football'
        ]); ?>

        <?= $form->field($apiSettings, 'api_id', ['inputOptions' => ['id' => 'api']])
            ->dropDownList(ArrayHelper::map($api, 'id', 'provider')) ?>

        <div class="form-group field-apisettings-data_keys required">
            <label class="control-label" for="apisettings-data_keys">Api Key</label>
            <?= Html::textInput('apiKey','',array('class'=>'form-control')) ?>
        </div>

        <div class="form-group field-apisettings-data_keys required" id="apiLogin" style="display: none">
            <label class="control-label" for="apisettings-data_keys">UserName</label>
            <?= Html::textInput('username','',array('class'=>'form-control')) ?>
        </div>

        <?= $form->field($apiSettings, 'interval')->dropDownList([5 => '5min', 10 => '10min', 30 => '30min'])->label('Update Interval') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary apiLogin', 'name' => 'contact-button', 'id' => 'apiLogin']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
<?php
$this->registerJs(
    '$("#api").change(function() {
        let val = this.value;
        if(val === "1"){
            $("#apiLogin").hide();
        } else if(val === "2") {
            $("#apiLogin").show();
            console.log(2);
        } else {
            console.log(3);
        }
    })'
);
?>
<script>

    /*$('#api').change(function() {
        console.log($(this));
    })*/
</script>
