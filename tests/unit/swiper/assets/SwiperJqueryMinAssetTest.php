<?php
namespace bestyii\swiper\tests\unit\swiper\assets;


use bestyii\swiper\assets\SwiperJqueryMinAsset;
use bestyii\swiper\tests\unit\BaseTestCase;

class SwiperJqueryMinAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperJqueryMinAsset::register( \Yii::$app->getView() );
    }

}
