<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [
        'methods' => [
            'path' => 'docs/methods/{filename}'
        ]
    ],
    'editLink' => function ($page) {
        $path = preg_replace('|^/docs/methods/|', '/_methods/', "{$page->getPath()}.{$page->getExtension()}");

        return "https://github.com/PHLAK/twine-docs/edit/master/source{$path}";
    }
];
