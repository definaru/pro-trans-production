<?php

namespace App\Providers;

use App\Models\MoySklad;


class GetMenu 
{

    public static function catalogTrucks() 
    {
        return [
            [
                'name' => 'DAF',
                'href' => 'daf',
                'image' => '/img/guayaquillib/daf.png'
            ],
            [
                'name' => 'HYUNDAI COMMERCIAL',
                'href' => 'hyundai-commercial',
                'image' => '/img/guayaquillib/hyundai.png'
            ],
            [
                'name' => 'ISUZU COMMERCIAL',
                'href' => 'isuzu-commercial',
                'image' => '/img/guayaquillib/isuzu.png'
            ],
            [
                'name' => 'IVECO',
                'href' => 'iveco',
                'image' => '/img/guayaquillib/iveco.png'
            ],
            [
                'name' => 'KIA COMMERCIAL',
                'href' => 'kia-commercial',
                'image' => '/img/guayaquillib/kia.png'
            ],
            [
                'name' => 'MAN',
                'href' => 'man',
                'image' => '/img/guayaquillib/man.png'
            ],
            [
                'name' => 'MERCEDES-BENZ COMMERCIAL',
                'href' => 'mercedes-benz-commercial',
                'image' => '/img/guayaquillib/mercedes-benz.png'
            ],
            [
                'name' => 'RENAULT TRUCKS',
                'href' => 'renault-trucks',
                'image' => '/img/guayaquillib/renault.png'
            ],
            [
                'name' => 'SCANIA',
                'href' => 'scania',
                'image' => '/img/guayaquillib/scania.png'
            ],
            [
                'name' => 'VOLVO TRUCKS',
                'href' => 'volvo-trucks',
                'image' => '/img/guayaquillib/volvo.png'
            ]
        ];
    } 

    public static function catalog() 
    {
        return [
            [
                'name' => 'ABARTH',
                'href' => 'abarth',
                'image' => '/img/guayaquillib/abarth.png'
            ],
            [
                'name' => 'ALFA ROMEO',
                'href' => 'romeo',
                'image' => '/img/guayaquillib/alfa-romeo.png'
            ],
            [
                'name' => 'AUDI',
                'href' => 'audi',
                'image' => '/img/guayaquillib/audi.png'
            ],
            [
                'name' => 'BMW',
                'href' => 'bmw',
                'image' => '/img/guayaquillib/bmw.png'
            ],
            [
                'name' => 'BMW MOTORRAD',
                'href' => 'motorrad',
                'image' => '/img/guayaquillib/bmw-motorrad.png'
            ],
            [
                'name' => 'BUICK',
                'href' => 'buick',
                'image' => '/img/guayaquillib/buick.png'
            ],
            [
                'name' => 'CADILLAC',
                'href' => 'cadillac',
                'image' => '/img/guayaquillib/cadillac.png'
            ],
            [
                'name' => 'CHEVROLET',
                'href' => 'chevrolet',
                'image' => '/img/guayaquillib/chevrolet.png'
            ],
            [
                'name' => 'CHRYSLER',
                'href' => 'chrysler',
                'image' => '/img/guayaquillib/chrysler.png'
            ],
            [
                'name' => 'CITROEN',
                'href' => 'citroen',
                'image' => '/img/guayaquillib/citroen.png'
            ],
            [
                'name' => 'DACIA',
                'href' => 'dacia',
                'image' => '/img/guayaquillib/dacia.png'
            ],
            [
                'name' => 'DAEWOO',
                'href' => 'daewoo',
                'image' => '/img/guayaquillib/daewoo.png'
            ],
            [
                'name' => 'DODGE',
                'href' => 'dodge',
                'image' => '/img/guayaquillib/dodge.png'
            ],
            [
                'name' => 'FIAT',
                'href' => 'fiat',
                'image' => '/img/guayaquillib/fiat.png'
            ],
            [
                'name' => 'FIAT PROFESSIONAL',
                'href' => 'professional',
                'image' => '/img/guayaquillib/fiat-professional.png'
            ],
            [
                'name' => 'FORD',
                'href' => 'ford',
                'image' => '/img/guayaquillib/ford.png'
            ],
            [
                'name' => 'GMC',
                'href' => 'gmc',
                'image' => '/img/guayaquillib/gmc.png'
            ],
            [
                'name' => 'HOLDEN',
                'href' => 'holden',
                'image' => '/img/guayaquillib/holden.png'
            ],
            [
                'name' => 'HONDA',
                'href' => 'honda',
                'image' => '/img/guayaquillib/honda.png'
            ],
            [
                'name' => 'HUMMER',
                'href' => 'hummer',
                'image' => '/img/guayaquillib/hummer.png'
            ],
            [
                'name' => 'HYUNDAI',
                'href' => 'hyundai',
                'image' => '/img/guayaquillib/hyundai.png'
            ],
            [
                'name' => 'INFINITI',
                'href' => 'infiniti',
                'image' => '/img/guayaquillib/infiniti.png'
            ],
            [
                'name' => 'ISUZU',
                'href' => 'isuzu',
                'image' => '/img/guayaquillib/isuzu.png'
            ],
            [
                'name' => 'JAGUAR',
                'href' => 'jaguar',
                'image' => '/img/guayaquillib/jaguar.png'
            ],
            [
                'name' => 'JEEP',
                'href' => 'jeep',
                'image' => '/img/guayaquillib/jeep.png'
            ],
            [
                'name' => 'KIA',
                'href' => 'kia',
                'image' => '/img/guayaquillib/kia.png'
            ],
            [
                'name' => 'LANCIA',
                'href' => 'lancia',
                'image' => '/img/guayaquillib/lancia.png'
            ],
            [
                'name' => 'LAND ROVER',
                'href' => 'rover',
                'image' => '/img/guayaquillib/landrover.png'
            ],
            [
                'name' => 'LEXUS',
                'href' => 'lexus',
                'image' => '/img/guayaquillib/lexus.png'
            ],
            [
                'name' => 'MAZDA',
                'href' => 'mazda',
                'image' => '/img/guayaquillib/mazda.png'
            ],
            [
                'name' => 'MERCEDES-BENZ',
                'href' => 'mercedes-benz',
                'image' => '/img/guayaquillib/mercedes-benz.png'
            ],
            [
                'name' => 'MINI',
                'href' => 'mini',
                'image' => '/img/guayaquillib/mini.png'
            ],
            [
                'name' => 'MITSUBISHI',
                'href' => 'mitsubishi',
                'image' => '/img/guayaquillib/mitsubishi.png'
            ],
            [
                'name' => 'NISSAN',
                'href' => 'nissan',
                'image' => '/img/guayaquillib/nissan.png'
            ],
            [
                'name' => 'OLDSMOBILE',
                'href' => 'oldsmobile',
                'image' => '/img/guayaquillib/oldsmobile.png'
            ],
            [
                'name' => 'OPEL',
                'href' => 'opel',
                'image' => '/img/guayaquillib/opel.png'
            ],
            [
                'name' => 'PEUGEOT',
                'href' => 'peugeot',
                'image' => '/img/guayaquillib/peugeot.png'
            ],
            [
                'name' => 'PONTIAC',
                'href' => 'pontiac',
                'image' => '/img/guayaquillib/pontiac.png'
            ],
            [
                'name' => 'PORSCHE',
                'href' => 'porsche',
                'image' => '/img/guayaquillib/porsche.png'
            ],
            [
                'name' => 'RAM',
                'href' => 'ram',
                'image' => '/img/guayaquillib/ram.png'
            ],
            [
                'name' => 'RAVON',
                'href' => 'ravon',
                'image' => '/img/guayaquillib/ravon.png'
            ],
            [
                'name' => 'RENAULT',
                'href' => 'renault',
                'image' => '/img/guayaquillib/renault.png'
            ],
            [
                'name' => 'ROLLS-ROYCE',
                'href' => 'rolls-royce',
                'image' => '/img/guayaquillib/rolls-royce.png'
            ],
            [
                'name' => 'SAAB',
                'href' => 'saab',
                'image' => '/img/guayaquillib/saab.png'
            ],
            [
                'name' => 'SATURN',
                'href' => 'saturn',
                'image' => '/img/guayaquillib/saturn.png'
            ],
            [
                'name' => 'SEAT',
                'href' => 'seat',
                'image' => '/img/guayaquillib/seat.png'
            ],
            [
                'name' => 'SKODA',
                'href' => 'skoda',
                'image' => '/img/guayaquillib/skoda.png'
            ],
            [
                'name' => 'SMART',
                'href' => 'smart',
                'image' => '/img/guayaquillib/smart.png'
            ],
            [
                'name' => 'SSANGYONG',
                'href' => 'ssangyong',
                'image' => '/img/guayaquillib/ssangyong.png'
            ],
            [
                'name' => 'SUBARU',
                'href' => 'subaru',
                'image' => '/img/guayaquillib/subaru.png'
            ],
            [
                'name' => 'SUZUKI',
                'href' => 'suzuki',
                'image' => '/img/guayaquillib/suzuki.png'
            ],
            [
                'name' => 'TOYOTA',
                'href' => 'toyota',
                'image' => '/img/guayaquillib/toyota.png'
            ],
            [
                'name' => 'VAUXHALL',
                'href' => 'vauxhall',
                'image' => '/img/guayaquillib/vauxhall.png'
            ],
            [
                'name' => 'VOLKSWAGEN',
                'href' => 'volkswagen',
                'image' => '/img/guayaquillib/volkswagen.png'
            ],
            [
                'name' => 'VOLVO',
                'href' => 'volvo',
                'image' => '/img/guayaquillib/volvo.png'
            ],
            [
                'name' => 'ZAZ',
                'href' => 'zaz',
                'image' => '/img/guayaquillib/zaz.png'
            ]
        ];
    }

    public static function user() 
    {
        return [
            [
                'icon' => 'settings',
                'link' => 'Мои настройки',
                'href' => '/dashboard/settings/profile'
            ],
            [
                'icon' => '',
                'link' => 'divider',
                'href' => ''
            ],
            [
                'icon' => 'logout',
                'link' => 'Выйти',
                'href' => '/logout'
            ]
        ];
    }

    public static function help()
    {
        return [
            // [
            //     'icon' => '',
            //     'link' => 'divider',
            //     'href' => ''
            // ],
            [
                'icon' => '',
                'link' => 'Условия гарантии',
                'href' => '/dashboard/guaranty'
            ],
            [
                'icon' => '',
                'link' => 'Правила возврата',
                'href' => '/dashboard/return-policy'
            ],
            [
                'icon' => '',
                'link' => 'Обратная связь',
                'href' => '/contact'
            ]
        ];
    }


    public static function getMenuCatalog()
    {
        //GetMenu::getCatalog()
        $url = MoySklad::msUrl().'productfolder';
        $response = MoySklad::get($url);
        $array = [];
        foreach($response->json()['rows'] as $menu) {
            $array[] = [
                'name' => $menu['name'],
                'href' => 'catalog/category/'.$menu['id'],
            ];
        }
        return $array;
    }

    public static function dataMenu()
    {
        return [
            [
                'header' => 'Меню',
                'list' => [
                    [
                        'icon' => 'topic',
                        'name' => 'Каталоги',
                        'slug' => 'catalog',
                        'count' => '',
                        'list' => GetMenu::getMenuCatalog()                 
                    ],
                    [
                        'icon' => 'inventory',
                        'name' => 'Платежи',
                        'slug' => 'payment',
                        'count' => '',
                        'list' => [
                            [
                                'name' => 'Счета',
                                'href' => 'payment/order'
                            ],
                            [
                                'name' => 'Заказы',
                                'href' => 'payment/reports'
                            ],
                            [
                                'name' => 'Отчёты',
                                'href' => 'payment/record'
                            ],
                            [
                                'name' => 'divider',
                                'href' => ''
                            ],
                            [
                                'name' => 'Мои заказы',
                                'href' => 'payment/account'
                            ]
                        ]
                    ],
                    [
                        'icon' => 'shopping_cart',
                        'name' => 'Корзина',
                        'slug' => 'card',
                        'count' => '13',
                        'list' => ''
                    ],                    
                    // [
                    //     'icon' => 'monitoring',
                    //     'name' => 'Акции',
                    //     'slug' => 'sales',
                    //     'count' => '',
                    //     'list' => ''
                    // ],
                    [
                        'icon' => 'school',
                        'name' => 'Обучение',
                        'slug' => 'events',
                        'count' => '',
                        'list' => ''
                    ]
                ]
            ],
            [
                'header' => 'Аккаунт',
                'list' => [
                    [
                        'icon' => 'notifications',
                        'name' => 'Сообщения',
                        'slug' => 'notifications',
                        'count' => '5',
                        'list' => ''
                    ],
                    [
                        'icon' => 'tune',
                        'name' => 'Настройки',
                        'slug' => 'settings/profile',
                        'count' => '',
                        'list' => ''
                    ],
                    [
                        'icon' => 'help',
                        'name' => 'Помощь',
                        'slug' => 'help',
                        'count' => '',
                        'list' => ''
                    ]

                ]
            ]
        ];
    }

}