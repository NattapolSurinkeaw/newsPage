<?php

return [
    'name' => 'categories',
    'columns' => [
        'id INT AUTO_INCREMENT PRIMARY KEY',
        'cate_title varchar(255) NOT NULL',
        'slug varchar(255) NOT NULL',
        'priority int NOT NULL DEFAULT 1',
        'meta_title varchar(255) DEFAULT NULL',
        'meta_description varchar(400) DEFAULT NULL',
        'status_display tinyint(1) NOT NULL DEFAULT 1',
        'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
        'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
    ]
];