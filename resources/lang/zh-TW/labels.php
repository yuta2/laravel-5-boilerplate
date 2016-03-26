<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => '全部',
        'yes' => '是',
        'no' => '否',
        'custom' => '自訂',
        'actions' => '行動',
        'buttons' => [
            'save' => '儲存',
            'update' => '更新',
        ],
        'hide' => '隱藏',
        'none' => '無',
        'show' => '顯示',
        'toggle_navigation' => '切換導航列',
    ],

    'backend' => [
        'access' => [
            'permissions' => [
                'create' => '建立權限',
                'dependencies' => '依賴性',
                'edit' => '編輯權限',

                'groups' => [
                    'create' => '建立群組',
                    'edit' => '編輯群組',

                    'table' => [
                        'name' => '名稱',
                    ],
                ],

                'grouped_permissions' => '分組權限',
                'label' => '權限',
                'management' => '權限管理',
                'no_groups' => '沒有權限群組.',
                'no_permissions' => '沒有權限可供選擇.',
                'no_roles' => '沒有角色設置',
                'no_ungrouped' => '沒有未分組的權限.',

                'table' => [
                    'dependencies' => '依賴性',
                    'group' => '群組',
                    'group-sort' => '群組排序',
                    'name' => '名稱',
                    'permission' => '權限',
                    'roles' => '角色',
                    'system' => '系統',
                    'total' => '項權限',
                    'users' => '使用者',
                ],

                'tabs' => [
                    'general' => '一般',
                    'groups' => '所有群組',
                    'dependencies' => '依賴性',
                    'permissions' => '所有權限',
                ],

                'ungrouped_permissions' => '未分組權限',
            ],

            'roles' => [
                'create' => '建立角色',
                'edit' => '編輯角色',
                'management' => '角色管理',

                'table' => [
                    'number_of_users' => '用戶數',
                    'permissions' => '權限',
                    'role' => '角色',
                    'sort' => '排序',
                    'total' => '種角色',
                ],
            ],

            'users' => [
                'active' => '活動',
                'all_permissions' => '所有權限',
                'change_password' => '變更密碼',
                'change_password_for' => '更改密碼 :user',
                'create' => '建立使用者',
                'deactivated' => '停用帳號',
                'deleted' => '刪除使用者',
                'dependencies' => '依賴性',
                'edit' => '編輯使用者',
                'management' => '使用者管理',
                'no_other_permissions' => '沒有其他權限',
                'no_permissions' => '沒有權限',
                'no_roles' => '沒有角色設置.',
                'permissions' => '權限',
                'permission_check' => '如果有的話, 檢查權限也將檢查它的依賴性.',

                'table' => [
                    'confirmed' => '確認',
                    'created' => '建立日期',
                    'email' => 'E-mail',
                    'id' => 'ID',
                    'last_updated' => '最後更新',
                    'name' => '姓名',
                    'no_deactivated' => '沒有停用的使用者',
                    'no_deleted' => '沒有刪除的使用者',
                    'other_permissions' => '其他權限',
                    'roles' => '角色',
                    'total' => '位使用者',
//                    'total' => 'user total|users total',
                ],
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title' => '登入',
            'login_button' => '登入',
            'login_with' => 'Login with :social_media',
            'register_box_title' => '註冊',
            'register_button' => '註冊',
            'remember_me' => '記住我',
            'start' => '所有的工作從登入開始',
        ],

        'passwords' => [
            'forgot_password' => '忘記密碼?',
            'reset_password_box_title' => '重設密碼',
            'reset_password_button' => '重設密碼',
            'send_password_reset_link_button' => '傳送密碼重設連結',
        ],

        'macros' => [
            'country' => [
                'alpha' => 'Country Alpha Codes',
                'alpha2' => 'Country Alpha 2 Codes',
                'alpha3' => 'Country Alpha 3 Codes',
                'numeric' => 'Country Numeric Codes',
            ],
            'subsidiary' => '子公司',

            'macro_examples' => 'Macro Examples',

            'state' => [
                'mexico' => 'Mexico State List',
                'us' => [
                    'us' => 'US States',
                    'outlying' => 'US Outlying Territories',
                    'armed' => 'US Armed Forces',
                ],
            ],

            'territories' => [
                'canada' => 'Canada Province & Territories List',
            ],

            'timezone' => '時區',
        ],

        'user' => [
            'passwords' => [
                'change' => '變更密碼',
            ],

            'profile' => [
                'avatar' => '頭像',
                'created_at' => '建立於',
                'edit_information' => '編輯資訊',
                'email' => 'E-mail',
                'last_updated' => '最後修改',
                'name' => '名字',
                'update_information' => '更新資訊',
            ],
        ],

    ],
];
