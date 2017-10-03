<?php

namespace common\assets;

use yii\web\AssetBundle;
use yii\web\JsExpression;

/**
 * Class SyntaxHighlighterAsset
 * @package common\assets
 */
class SyntaxHighlighterAsset extends AssetBundle
{
    const THEME_DEFAULT = 'Default';
    const THEME_DJANGO = 'Django';
    const THEME_ECLIPSE = 'Eclipse';
    const THEME_EMACS = 'Emacs';
    const THEME_FADE_TO_GREY = 'FadeToGrey';
    const THEME_MD_ULTRA = 'MDUltra';
    const THEME_MIDNIGHT = 'Midnight';
    const THEME_R_DARK = 'RDark';

    public $sourcePath = '@common/assets/src/syntaxhighlighter';

    public static $theme;
    public static $fix = true;

    public $css = [];
    public $js;

    private static $_asset;

    public function init()
    {
        $theme = self::$theme ? self::$theme : self::THEME_DEFAULT;

        $this->css[] = 'styles/shCore' . $theme . '.css';
        $this->css[] = 'styles/shTheme' . $theme . '.css';
        $this->css[] = self::$fix ? 'fix.css' : '';

        $this->js = [
            'scripts/XRegExp.js',
            'scripts/shCore.js',
            'scripts/shAutoloader.js',
        ];
    }

    public $depends = [
        'yii\web\YiiAsset'
    ];

    public static function register($view)
    {
        parent::register($view);
        self::$_asset = new SyntaxHighlighterAsset();
        $assetPath = \Yii::$app->getAssetManager()->getPublishedUrl(self::$_asset->sourcePath);
        $script = new JsExpression("
            SyntaxHighlighter.autoloader(
                'js jscript javascript  {$assetPath}/scripts/shBrushJScript.js',
                'applescript            {$assetPath}/scripts/shBrushAppleScript.js',
                'php                    {$assetPath}/scripts/shBrushPhp.js',
                'css                    {$assetPath}/scripts/shBrushCss.js',
                'bash                   {$assetPath}/scripts/shBrushBash.js',
                'sql                    {$assetPath}/scripts/shBrushSql.js',
                'xml html               {$assetPath}/scripts/shBrushXml.js'
            );
        ");
        $view->registerJs($script);
        $view->registerJs('SyntaxHighlighter.all();');
    }
}