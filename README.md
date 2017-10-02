SyntaxHighlighter
===============================

1. Copy the assets folder to the common folder of your project
2. Add to View:

```
use common\assets\SyntaxHighlighterAsset;


SyntaxHighlighterAsset::register($this);
```

Now, when outputting the code formatted with sh4tinymce, there will be a highlight with line numbering.
