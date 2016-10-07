<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?php foreach($posts as $post):?>
    <div class="panel panel-default">
        <div class="panel-heading">

            <h3 class="panel-title">

                <a href="#"> <?= $post->title ?></a></h3>
            <? $post->opus ?>

        </div>
        <div class="panel-body">
        <a><?php $post->img ?></a>
            </div>
        <div class="panel-body">
            <?= $post->opus ?>
        </div>
    </div>

<?php endforeach;?>
<?= \yii\widgets\LinkPager::widget(['pagination'=>$pages]) ?>
