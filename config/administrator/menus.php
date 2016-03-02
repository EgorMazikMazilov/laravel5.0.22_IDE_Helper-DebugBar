<?php
/**
 * Created by PhpStorm.
 * User: MaziKi
 * Date: 29.02.2016
 * Time: 22:27
 */
return [
    'title' => 'Меню',
    'single' => 'пункт меню',
    'model' => 'App\Menu',
    'columns' => [
        'id',
        'active',
        'title'
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'weight' => [
            'type' => 'number',
        ],
        'title' => [
            'type' => 'text',
        ],
        'url' => [
            'type' => 'text',
        ],
    ],
];