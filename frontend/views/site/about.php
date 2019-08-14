<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '关于';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>这是关于本页的信息，你将看到本页面的路径信息。</p>

    <code><?= __FILE__ ?></code>
</div>
