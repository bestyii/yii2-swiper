# Отображение справа налево

Для отображения контента справа налево необходимо объявить 
поведение `rtl` в поле `bestyii\swiper\Swiper::$behaviours`, иначе поведение не будет применено.

Данное поведение всего лишь добавляет опцию `'dir' = 'rtl'` в тег-контейнер виджета.

> Заметка: Аналогичный эффект будет, если указать `Swiper::$containerOptions['dir'] = 'rtl'`

Пример:

```PHP
<?php
use bestyii\swiper\Swiper;

echo Swiper::widget( [
  'items' => [
    'Slide 1',
    'Slide 2',
    'Slide 3'
  ],
  'behaviours' => [
    'rtl'
  ]
] );

// Через именованную константу
echo Swiper::widget( [
  'items' => [
    'Slide 1',
    'Slide 2',
    'Slide 3'
  ],
  'behaviours' => [
    Swiper::BEHAVIOUR_RTL
  ]
] );

// Через настройки контейнера
echo Swiper::widget( [
  'items' => [
    'Slide 1',
    'Slide 2',
    'Slide 3'
  ],
  'containerOptions' => [
    'dir' => 'rtl'
  ]
] );
```
