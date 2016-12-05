<?php
/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/12/2
 * Time: 12:00.
 */
include '../arrayConversion/arrayConversion.php';
use Fufangjie\Conversion\ArrayConversion;

$conversion = new ArrayConversion();
$arrayId    = $_POST['arrayId'];
$data[0]    = [
    [
        'id'         => 1,
        'hotel_name' => '长隆酒店',
        'ac_list'    => [
            [
                'id'        => 1,
                'image_url' => 'http://www.baidu.com',
            ],
            [
                'id'        => 2,
                'image_url' => 'http://www.jd.com',
            ],

        ],
    ],
    [
        'id'         => 2,
        'hotel_name' => '万达酒店',
        'ac_list'    => [
            [
                'id'        => 1,
                'image_url' => 'http://www.taobao.com',
            ],
            [
                'id'        => 2,
                'image_url' => 'http://www.wangyi.com',
            ],

        ],
    ],
];
$data[1] = [
    [
        'id'        => 1,
        'hotelName' => '长隆酒店',
        'date'      => '2016-12-06',
        'isOpen'    => 1,
    ],
    [
        'id'        => 1,
        'hotelName' => '长隆酒店',
        'date'      => '2016-12-07',
        'isOpen'    => 0,
    ],
    [
        'id'        => 1,
        'hotelName' => '长隆酒店',
        'date'      => '2016-12-08',
        'isOpen'    => 1,
    ],
    [
        'id'        => 1,
        'hotelName' => '长隆酒店',
        'date'      => '2016-12-09',
        'isOpen'    => 0,
    ],

];
$data[2] = [
    [
        'id'        => 1,
        'hotelName' => '长隆酒店',
        'dateList'  => [
            [
                'date'   => '2016-12-06',
                'isOpen' => 1,
            ],
            [
                'date'   => '2016-12-07',
                'isOpen' => 0,
            ],
            [
                'date'   => '2016-12-08',
                'isOpen' => 1,
            ],
            [
                'date'   => '2016-12-09',
                'isOpen' => 0,
            ],
        ],
    ],

];
$data[3] = [
    [
        'id'           => 1,
        'hotelName'    => '长隆酒店',
        'styleId'      => 3,
        'styleName'    => '三选一',
        'itemId'       => 333,
        'itemName'     => '双早元素',
        'providerId'   => 333,
        'providerName' => '长隆供应商',

    ],
    [
        'id'           => 2,
        'hotelName'    => '七天酒店',
        'styleId'      => 4,
        'styleName'    => '四选一',
        'itemId'       => 444,
        'itemName'     => '单早元素',
        'providerId'   => 444,
        'providerName' => '七天供应商',
    ],
];
if ($arrayId) {
    $result = $conversion->conversion($data[$arrayId - 1], $arrayId - 1);
    echo '未转换之前的数组：<hr>';
    echo '<pre>';
    var_dump($data[$arrayId - 1]);
    echo '转换之后的数组：<hr>';
    echo '<pre>';
    var_dump($result);
}
