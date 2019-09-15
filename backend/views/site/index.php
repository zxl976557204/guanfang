<?php

/* @var $this yii\web\View */

$this->title = '我的后台管理系统';
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


?>
<div class="login-box">
    <div class="login-logo">
        <a href="#">上传图片</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"><!-- 请登录后开始管理 --></p>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?php 
        echo $form->field($model, 'image')->label('美图')->widget(FileInput::classname(), [
        'options' => ['multiple' => false],
        'pluginOptions' => [
        // 需要预览的文件格式
        'previewFileType' => 'image',        
        ],
        ]);
         ?>
         
        <?php ActiveForm::end(); ?>
    </div>
</div>
