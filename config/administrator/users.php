<?php
/**
 * Created by PhpStorm.
 * User: MaziKi
 * Date: 29.02.2016
 * Time: 22:27
 */
return [
    'title' => 'Пользователи',
    'single' => 'пользователя',
    'model' => 'App\User',
    'columns' => [
        'id',
        'email'
    ],
    'edit_fields' => [
        'email' => [
            'type' => 'text',
        ]
    ],
];