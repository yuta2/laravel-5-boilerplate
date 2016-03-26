<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'permissions' => [
                'create_error' => '無法建立此權限. 請再試一次.',
                'delete_error' => '刪除權限時出現問題. 請再試一次.',

                'groups' => [
                    'associated_permissions' => '你不能刪除這個群組，因為它已有相關的權限.',
                    'has_children' => '你不能刪除這個群組，因為它有子群組.',
                    'name_taken' => '已存在相同名字的群組',
                ],

                'not_found' => '該權限不存在.',
                'system_delete_error' => '不能刪除系統權限.',
                'update_error' => '更新權限時出現問題. 請再試一次.',
            ],

            'roles' => [
                'already_exists' => '此角色已經存在. 請選用其他不同的名稱.',
                'cant_delete_admin' => '您無法刪除管理員角色.',
                'create_error' => '創建角色出現問題. 請再試一次.',
                'delete_error' => '刪除角色出現問題. 請再試一次.',
                'has_users' => '你不能刪除與使用者已有關連的角色.',
                'needs_permission' => '您必須為這個角色選擇至少一個的權限.',
                'not_found' => '該角色不存在.',
                'update_error' => '更新角色出現問題. 請再試一次.',
            ],

            'users' => [
                'cant_deactivate_self' => '你不能對自己這樣做.',
                'cant_delete_self' => '你不能刪除自己.',
                'create_error' => '創建使用者出現問題. 請再試一次.',
                'delete_error' => '刪除該使用者出現問題. 請再試一次.',
                'email_error' => '該電子郵件地址屬於別的使用者所有.',
                'mark_error' => '更新該使用者出現問題. 請再試一次.',
                'not_found' => '該使用者不存在.',
                'restore_error' => '恢復該使用者出現問題. 請再試一次.',
                'role_needed_create' => '使用者已創建但停用. 你必須選擇至少一個角色.',
                'role_needed' => '你必須至少選擇一個角色.',
                'update_error' => '更新該使用者出現問題. 請再試一次.',
                'update_password_error' => '更新該使用者密碼時出現問題. 請再試一次.',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => '您的帳戶已被確認.',
                'confirm' => '確認您的帳戶!',
                'created_confirm' => '您的帳號已成功創建. 我們已經向您發出一封電子郵件, 以確認您的帳號。',
                'mismatch' => '您的確認碼不匹配.',
                'not_found' => '該確認代碼不存在.',
                'resend' => '您的帳號無法確認. 請點擊電子郵件中的確認連結, 或 <a href="' . route('account.confirm.resend', ':token') . '">點擊這裡</a> 重新發送確認電子郵件.',
                'success' => '您的帳號已成功確認!',
                'resent' => '一個新的確認電子郵件已經發送到您個人檔案上的地址.',
            ],

            'deactivated' => '您的帳戶已停用.',
            'email_taken' => '該電子郵件地址已被佔用.',

            'password' => [
                'change_mismatch' => '你的舊密碼錯誤.',
            ],


        ],
    ],
];