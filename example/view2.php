<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\assets\SyntaxHighlighterAsset;

/* @var $this yii\web\View */

SyntaxHighlighterAsset::$theme = SyntaxHighlighterAsset::THEME_R_DARK;
SyntaxHighlighterAsset::register($this);

$this->title = $model->title;
?>
<div class="example-view2">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute' => 'content',
                'format' => 'raw', // Format raw
            ],
            //...
        ],
    ]) ?>

</div>
