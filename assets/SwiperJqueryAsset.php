<?php
namespace bestyii\swiper\assets;

use yii\web\AssetBundle;

/**
 * Class SwiperJqueryAsset
 *
 * @package bestyii\swiper\assets
 */
class SwiperJqueryAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/package';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.jquery.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/swiper.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
