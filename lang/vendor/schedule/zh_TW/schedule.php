<?php
return [
    'titles' => [
        'list' => '任務排程清單',
        'create' => '新增任務排程',
        'edit' => '編輯任務排程',
        'show' => '顯示執行歷史',
        'back_to_application' => '返回應用程式'
    ],
    'fields' => [
        'command' => '指令',
        'arguments' => '參數',
        'options' => '選項',
        'options_with_value' => '有值的選項',
        'expression' => 'Cron 表達式',
        'log_filename' => '記錄檔案名稱',
        'output' => '輸出',
        'even_in_maintenance_mode' => '即使在維護模式下',
        'without_overlapping' => '避免任務重複',
        'on_one_server' => '僅在一台伺服器上執行任務排程',
        'webhook_before' => 'Webhook 觸發前網址',
        'webhook_after' => 'Webhook 觸發後網址',
        'email_output' => '用於輸出的電子郵件',
        'sendmail_success' => '在執行命令成功的情況下寄送電子郵件',
        'sendmail_error' => '在執行指命失敗的情況下寄送電子郵件',
        'log_success' => '在執行命令成功的情況下將指令輸出儲存到歷史資料表',
        'log_error' => '在執行指命失敗的情況下將指令輸出儲存到歷史資料表',
        'status' => '狀態',
        'actions' => '操作',
        'data-type' => '資料類型',
        'run_in_background' => '在背景執行',
        'created_at' => '建立時間',
        'updated_at' => '更新時間',
        'never' => '永不',
        'groups' => '群組',
        'environments' => '環境'
    ],
    'messages' => [
        'no-records-found' => '沒有找到記錄。',
        'save-success' => '資料儲存成功。',
        'save-error' => '儲存資料時發生錯誤。',
        'timezone' => '全部任務排程都將在時區執行：',
        'select' => '選擇一個指令',
        'custom' => '自訂指令',
        'custom-command-here' => '在這裡自訂指令（例如 `cat /proc/cpuinfo` 或 `artisan db:migrate`）',
        'help-cron-expression' => '如有必要，請點擊此處並使用工具來簡化 cron 表達式的新增',
        'help-log-filename' => '如果設定了日誌檔案，則來自此任務排程的日誌資訊將寫到 storage/logs/<log filename>.log',
        'help-type' => '多種 :type 可以指定用逗號分隔',
        'attention-type-function' => "注意：在執行任務排程之前，將執行「函數」類型的參數，並將其返回值作為參數傳遞。小心使用，可能會中斷您的任務。",
        'delete_cronjob' => '刪除任務排程',
        'delete_cronjob_confirm' => '你真的要刪除任務排程「:cronjob」？'
    ],
    'status' => [
        'active' => '啟用',
        'inactive' => '關閉',
        'trashed' => '已被軟刪除',
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
        'cancel' => '取消',
        'restore' => '恢復'
    ],
    'validation' => [
        'cron' => '欄位必須以排程規則表達式填寫。',
        'regex' => trans('validation.alpha_dash') . ' ' . '逗號也是允許的。'
    ]
];