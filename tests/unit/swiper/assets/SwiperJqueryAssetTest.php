<?php
namespace bestyii\swiper\tests\unit\swiper\assets;


use bestyii\swiper\assets\SwiperJqueryAsset;
use bestyii\swiper\tests\unit\BaseTestCase;

class SwiperJqueryAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperJqueryAsset::register( \Yii::$app->getView() );
    }

}