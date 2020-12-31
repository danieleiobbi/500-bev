<?php

namespace App\Http\Controllers;

use App\Configurations;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = ['page' => 'home'];
        $config = $this->config();
        return view('frontend.home', compact('data', 'config'));
    }

    private function config()
    {
        return [
            'wheels' => [],
            'colors' => [
                '268' => _i("ICE WHITE"),
                '601' => _i("ONYX BLACK"),
                '215' => _i("EARTH GREY"),
                '237' => _i("ROSE GOLD"),
                '242' => _i("GLACIER BLUE"),
                '205' => _i("MINERAL GREY"),
                '230' => _i("OCEAN GREEN"),
                '278' => _i("CELESTIAL BLUE"),
                '690' => _i("MATT GREY"),
            ],
            'rgbCodes' => [
                '268' => "#dfe0e2",
                '601' => "#0d0d0d",
                '215' => "#43433a",
                '237' => "#dab7a3",
                '242' => "#597076",
                '205' => "#424953",
                '230' => "#0a2739",
                '278' => "#92aec3",
                '690' => "#4a4f53",
            ],
            'seats' => [],
            'defaultModel' => 'hb',
            'models' => [
                'hb' => [
                    'modelName' => _i("HATCHBACK"),
                    'wheels' => [],
                    'colors' => ['268', '601', '215', '237', '242', '205', '230', '278', '690'],
                    'seats' => [],
                    'default' => [
                        'color' => '242',
                        'seat' => '',
                        'wheel' => ''
                    ]
                ],
                'cabrio' => [
                    'modelName' => _i("CABRIO"),
                    'wheels' => [],
                    'colors' => ['268', '601', '215', '237', '242', '205', '230', '278', '690'],
                    'seats' => [],
                    'default' => [
                        'color' => '230',
                        'seat' => '',
                        'wheel' => ''
                    ]
                ],
                '3piu1' => [
                    'modelName' => _i("3+1"),
                    'wheels' => [],
                    'colors' => ['268', '601', '215', '237', '242', '205', '230', '278', '690'],
                    'seats' => [],
                    'default' => [
                        'color' => '237',
                        'seat' => '',
                        'wheel' => ''
                    ]
                ]
            ]
        ];
    }
}
