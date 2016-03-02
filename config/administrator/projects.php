<?php
/**
 * Created by PhpStorm.
 * User: MaziKi
 * Date: 02.03.2016
 * Time: 13:27
 */
return [
    'title' => 'Список фотоальбомов',
    'single' => 'фотоальбом',
    'model' => 'App\Project',
    'columns' => [
        'id',
        'active',
        'title' => [
           'title'=>'Название фотоальбома',
            ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
        ],
        'title' => [
            'type' => 'text',
        ],
        'slug' => [
            'type' => 'text',
        ],
        'content' => [
            'type' => 'wysiwyg',
        ],
        'image' => [
            'type' => 'image',
            'location' => public_path().'/uploads/project/original/',
            'naming' => 'keep',
            'size_limit' => '1',
            'size' => [
                [700, 400, 'auto', public_path().'/uploads/project/medium/', 100],
                [1000, 800, 'auto', public_path().'/uploads/project/large/', 100]
            ],
        ],
    ],
    'form_width' => 800,
];