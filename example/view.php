<?php

use common\assets\SyntaxHighlighterAsset;

/* @var $this yii\web\View */

SyntaxHighlighterAsset::register($this);
?>
<div class="example-view">
	<h2>Example code content</h2>

	<pre class="brush:php;auto-links:false;toolbar:false" contenteditable="false">
	    public function actionContact()
	    {
	      $model = new ContactForm();
	      return $this-&gt;render('contact', [
	        'model' =&gt; $model,
	      ]);
	    }
    </pre>

</div>
