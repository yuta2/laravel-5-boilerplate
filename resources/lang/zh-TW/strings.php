<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'permissions' => [
                'edit_explanation' => '如果你在層次結構中執行操作而沒有重新整理這個頁面, 你需要重新整理以反應變化.',

                'groups' => [
                    'hierarchy_saved' => '層次結構已成功保存.',
                ],

                'sort_explanation' => '此部分允許你在群組中組織你的權限, 無論群組或權限最終仍單獨分配到各角色中.',
            ],

            'users' => [
                'delete_user_confirm' => '你確定要永久刪除此使用者？在任何應用程序中引用該使用者的ID很可能會產生錯誤. 如要繼續則風險自負. 此操作無法被撤消.',
                'if_confirmed_off' => '(如果確認是關閉)',
                'restore_user_confirm' => '將此使用者還原到其原始狀態？',
            ],
        ],

        'dashboard' => [
            'title' => '管理控制台',
            'welcome' => '歡迎',
        ],

        'general' => [
            'all_rights_reserved' => '版權所有.',
            'are_you_sure' => '是否確定？',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => '繼續',
            'member_since' => 'Member since',
            'search_placeholder' => '搜尋...',

            'see_all' => [
                'messages' => '查看所有訊息',
                'notifications' => '查看全部',
                'tasks' => '查看所有任務',
            ],

            'status' => [
                'online' => '上線',
                'offline' => '離線',
            ],

            'you_have' => [
                'messages' => '{0} 沒有訊息|{1} 你有 1 則訊息|[2,Inf] 你有 :number 則訊息',
                'notifications' => '{0} 沒有通知|{1} 你有 1 則|[2,Inf] 你有 :number 則通知',
                'tasks' => '{0} 沒有任務|{1} 你有 1 項任務|[2,Inf] 你有 :number 項任務',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => '密碼重置連結',
            'reset_password' => '點擊此處重置您的密碼',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => '點擊此處確認您的帳號:',
        ],

        'test' => '測試',

        'tests' => [
            'based_on' => [
                'permission' => '基於權限 - ',
                'role' => '基於角色 - ',
            ],

            'js_injected_from_controller' => 'Javascript 從控制器注入',

            'using_blade_extensions' => '使用 Blade Extensions',

            'using_access_helper' => [  // TODO TRANSLATION
                'array_permissions' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles' => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not' => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id' => 'Using Access Helper with Permission ID',
                'permission_name' => 'Using Access Helper with Permission Name',
                'role_id' => 'Using Access Helper with Role ID',
                'role_name' => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works' => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because' => '你可以看到這裡是因為你有角色 \':role\'!',
            'you_can_see_because_permission' => '你可以看到這裡是因為你有權限 \':permission\'!',
        ],

        'user' => [
            'profile_updated' => '資料更新成功.',
            'password_updated' => '密碼成功更新.',
        ],

        'welcome_to' => '歡迎來到 :place',
    ],
];