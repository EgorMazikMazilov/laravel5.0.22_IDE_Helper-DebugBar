<?php
/**
 * Created by PhpStorm.
 * User: egor
 * Date: 21.01.16
 * Time: 18:52
 */
return [
    'title' => 'Фотографии',
    'single' => 'фотографию',
    'model' => 'App\Gallery',
    'columns' => [
        'id',
        'active',
        'project_name'=>[
            'title' => 'В какой фотоальбом...',
            'relationship' => 'project',
            'select' => "(:table).title",
            ],
        'image' => [
            'output' => '<img src="/uploads/images/small/(:value)" />',
        ],
    ],
    'edit_fields' => [
        'project' => [
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'active' => [
            'type' => 'bool',
        ],
        'weight' => [
            'type' => 'number',
        ],
        'alt' => [
            'type' => 'text',
        ],
        'title' => [
            'type' => 'text',
        ],
        'image' => [
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path().'/uploads/images/original/',
            'naming' => 'keep',
            'size_limit' =>1,
            'sizes' => [
                [102, 76, 'auto', public_path().'/uploads/images/small/', 100],
                [400, 300, 'auto', public_path().'/uploads/images/medium/', 100],
                [1024, 768, 'auto', public_path().'/uploads/images/large/', 100],

            ],
        ],
    ],
];