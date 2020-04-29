<?php
namespace bestyii\swiper\assets;

use yii\web\AssetBundle;

/**
 * Class SwiperAsset
 *
 * @package bestyii\swiper\assets
 */
class SwiperAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/swiper/package';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/swiper.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/swiper.css',
    ];

}
