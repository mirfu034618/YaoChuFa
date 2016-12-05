<?php

/**
 * Created by PhpStorm.
 * User: fufangjie
 * Date: 2016/12/2
 * Time: 14:02.
 */

namespace Fufangjie\Conversion;

class ArrayConversion
{
    public function conversion($array, $arrayNumber)
    {
        if ($arrayNumber == 0) {
            if ($array) {
                foreach ($array as $v) {
                    foreach ($v['ac_list'] as $key => $val) {
                        $dataList[$key] = [
                            'id'       => $val['id'],
                            'imageUrl' => $val['image_url'],
                        ];
                    }
                    $data[] = [
                        'id'        => $v['id'],
                        'hotelName' => $v['hotel_name'],
                        'acList'    => $dataList,
                    ];
                    unset($dataList);
                }
            }
        }
        if ($arrayNumber == 1) {
            if ($array) {
                foreach ($array as $key => $v) {
                    $dataList[$key] = [
                        'date'   => $v['date'],
                        'isOpen' => $v['isOpen'],
                    ];
                }
                $data[] = [
                    'id'        => $array[0]['id'],
                    'hotelName' => $array[0]['hotelName'],
                    'dateList'  => $dataList,
                ];
                unset($dataList);
            }
        }
        if ($arrayNumber == 2) {
            if ($array) {
                foreach ($array as $key => $v) {
                    foreach ($v['dateList'] as $key1 => $val) {
                        $data[] = [
                            'id'        => $v['id'],
                            'hotelName' => $v['hotelName'],
                            'date'      => $val['date'],
                            'isOpen'    => $val['isOpen'],
                        ];
                    }
                    unset($dataList);
                }
            }
        }
        if ($arrayNumber == 3) {
			if ($array){
				foreach ($array as $key => $v){
					$data[] = [
						'id' => $v['id'],
						'hotelName' => $v['hotelName'],
						'styleInfo' => "(styleId"."=>".$v['styleId'].")".$v['styleName'],
						'itemInfo'  => "(itemId"."=>".$v['itemId'].")".$v['itemName'],
						'providerInfo' => "(providerId"."=>".$v['providerId'].")".$v['providerName'],
					];
				}
			}
        }

        return is_array($data) && $data ? $data : [];
    }
}
