<?php
namespace bestyii\swiper\tests\unit\swiper\assets;


use bestyii\swiper\assets\SwiperAsset;
use bestyii\swiper\tests\unit\BaseTestCase;

class SwiperAssetBaseTest extends BaseTestCase
{
    public function testMain()
    {
        SwiperAsset::register( \Yii::$app->getView() );
    }
}
