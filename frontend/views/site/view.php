<?php

use common\assets\SyntaxHighlighterAsset;

/* @var $this yii\web\View */

SyntaxHighlighterAsset::register($this);
?>
<div class="site-view">
	<h2>Example code content</h2>

	<pre class="brush:php;auto-links:false;html-script:true;toolbar:false" contenteditable="false">
	<?php/**
     * @param $id
     * @return BlogPost the loaded model
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        if (($model = BlogPost::findOne(['id' => $id, 'status' => BlogPost::STATUS_PUBLISH])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(Module::t('module', 'The requested page does not exist.'));
        }
    }?>
	</pre>

<p>&nbsp;</p>
</div>
