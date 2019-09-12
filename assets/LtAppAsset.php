<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LtAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
    'js/html5shiv/es5-shim.min.js',
   'js/html5shiv/html5shiv.min.js',
   'js/html5shiv/html5shiv-printshiv.min.js',
   'js/respond/respond.min.js',
    ];
  public $jsOption = [
'condition' => 'lte IE9',
'position' => \yii\web\View::POS_HEAD,
  ];
}
