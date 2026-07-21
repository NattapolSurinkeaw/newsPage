<?php

return [
    'name' => 'news',
    'columns' => [
        'id INT AUTO_INCREMENT PRIMARY KEY',
        'title_news varchar(255) NOT NULL',
        'description_news varchar(300) NOT NULL',
        'content text NOT NULL',
        'author_id int NOT NULL',
        'view int NOT NULL',
        'thumnail varchar(255) DEFAULT NULL',
        'status_display tinyint(1) NOT NULL DEFAULT 1',
        'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
        'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
    ]
];