<?php
namespace bestyii\swiper\assets;


use yii\web\AssetBundle;

/**
 * Class SwiperJqueryMinAsset
 *
 * @package bestyii\swiper\assets
 */
class SwiperJqueryMinAsset extends AssetBundle
{

    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/package';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.jquery.min.js'
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
