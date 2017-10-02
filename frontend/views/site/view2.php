<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use common\assets\SyntaxHighlighterAsset;

/* @var $this yii\web\View */

SyntaxHighlighterAsset::register($this);

$this->title = $model->title;
?>
<div class="blog-backend-post-view">

    <h1><?= Html::encode($this->title) ?></h1>    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',            
            'title',
            'slug',
            [
                'attribute' => 'anons',
                'format' => 'raw',
            ],
            [
                'attribute' => 'content',
                'format' => 'raw', // Format raw
            ],                        
            [
                'attribute' => 'author_id',
                'format' => 'raw',
                'value' => $model->author->username,
            ],
            'created_at:datetime',
            'updated_at:datetime',
            'meta_description',
            'meta_keywords',
        ],
    ]) ?>

</div>
