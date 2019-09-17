<?php

/* @var $this yii\web\View */

$this->title = '小龙独特网页';
?>
<div class="site-index">
<?php if (!empty($image)): ?>

<?php foreach ($image as $img): ?>
<div class="div1">
<img src = "<?=$img->image ?>"
</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
