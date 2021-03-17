<?php
return [
    'titles' => [
        'list' => '排程清單',
        'create' => '新增排程',
        'edit' => '編輯排程',
        'show' => '顯示執行歷史'
    ],
    'fields' => [
        'command' => '指令',
        'params' => '參數',
        'expression' => 'Cron 表達式',
        'output' => '輸出',
        'even_in_maintenance_mode' => '即使在維護模式下',
        'without_overlapping' => '避免任務重複',
        'on_one_server' => '僅在一台伺服器上執行排程',
        'webhook_before' => 'Webhook 觸發前網址',
        'webhook_after' => 'Webhook 觸發後網址',
        'email_output' => '用於輸出的電子郵件',
        'sendmail_error' => '在執行指命失敗的情況下寄送電子郵件',
        'status' => '狀態',
        'actions' => '操作',
        'data-type' => '資料類型',
        'run_in_background' => '在背景執行'
    ],
    'messages' => [
        'no-records-found' => '沒有找到記錄。',
        'save-success' => '資料儲存成功。',
        'save-error' => '儲存資料時發生錯誤。',
        'timezone' => '全部排程都將在時區執行：',
        'select' => '選擇一個指令',
        'help-cron-expression' => '如有必要，請點擊此處並使用工具來簡化 cron 表達式的新增',
        'attention-type-function' => "注意：在執行排程之前，將執行「函數」類型的參數，並將其返回值作為參數傳遞。小心使用，可能會中斷您的任務。"
    ],
    'status' => [
        'active' => '啟用',
        'inactive' => '關閉'
    ],
    'buttons' => [
        'create' => '新增',
        'edit' => '編輯',
        'back' => '返回',
        'save' => '儲存',
        'inactivate' => '關閉',
        'activate' => '啟用',
        'delete' => '刪除',
        'history' => '歷史',
    ]
];