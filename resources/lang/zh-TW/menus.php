<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Menus Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in menu items throughout the system.
    | Regardless where it is placed, a menu item can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'title' => '訪問權管理',

            'permissions' => [
                'all' => '所有權限',
                'create' => '建立權限',
                'edit' => '編輯權限',
                'groups' => [
                    'all' => '所有群組',
                    'create' => '建立群組',
                    'edit' => '編輯群組',
                    'main' => '群組',
                ],
                'main' => '權限',
                'management' => '權限管理',
            ],

            'roles' => [
                'all' => '所有角色',
                'create' => '建立角色',
                'edit' => '編輯角色',
                'management' => '角色管理',
                'main' => '角色',
            ],

            'users' => [
                'all' => '所有使用者',
                'change-password' => '變更密碼',
                'create' => '建立使用者',
                'deactivated' => '停用帳號',
                'deleted' => '刪除使用者',
                'edit' => '編輯使用者',
                'main' => '使用者',
            ],
        ],

        'log-viewer' => [
            'main' => '記錄檢視器',
            'dashboard' => '儀表板',
            'logs' => '記錄',
            'actions' => '動作',
        ],

        'sidebar' => [
            'dashboard' => '儀表板',
            'general' => '一般',
            'main_navigation' => '主導覽',
            'testing' => '功能測試',
            'bs_test' => 'Bootstrap Test',
            'datatables_test' => 'Datatables Test',
        ],
    ],

    'language-picker' => [
        'language' => '語言',
        /**
         * Add the new language to this array.
         * The key should have the same language code as the folder name.
         * The string should be: 'Language-name-in-your-own-language (Language-name-in-English)'.
         * Be sure to add the new language in alphabetical order.
         */
        'langs' => [
            'da' => '丹麥文',
            'en' => '英文',
            'de' => '德文',
            'es' => '西班牙文',
            'fr' => '法文',
            'it' => '義大利文',
            'pt-BR' => '巴西葡萄牙文',
            'sv' => '瑞典文',
            'zh-TW' => '正體中文',
        ],
    ],
];
