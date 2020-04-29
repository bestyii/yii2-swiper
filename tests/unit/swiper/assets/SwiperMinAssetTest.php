<?php
namespace bestyii\swiper\tests\unit\swiper\assets;


use bestyii\swiper\assets\SwiperMinAsset;
use bestyii\swiper\tests\unit\BaseTestCase;

class SwiperMinAssetBaseTest extends BaseTestCase
{

    public function testMain()
    {
        SwiperMinAsset::register( \Yii::$app->getView() );
    }

}
