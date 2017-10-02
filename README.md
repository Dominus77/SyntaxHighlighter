Syntax Highlighter
===============================
Code syntax highlighting on your web page
---

1. Copy the assets folder to the common folder of your project
2. Add to View:

```
<?php
use common\assets\SyntaxHighlighterAsset;

SyntaxHighlighterAsset::register($this);
?>

<!-- Example content -->
<pre class="brush:php; auto-links:false; toolbar:false" contenteditable="false">
    public function actionContact()
    {
      $model = new ContactForm();
      return $this-&gt;render('contact', [
        'model' =&gt; $model,
      ]);
    }
</pre>
```

Now, when outputting the code formatted with sh4tinymce, there will be a highlight with line numbering.
