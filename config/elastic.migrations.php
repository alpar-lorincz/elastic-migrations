<?php

return [
    'table' => env('ELASTIC_MIGRATIONS_TABLE', 'elastic_migrations'),
    'storage_directory' => env('ELASTIC_MIGRATIONS_DIRECTORY', base_path('elastic/migrations')),
    'index_name_prefix' => env('ELASTIC_MIGRATIONS_INDEX_NAME_PREFIX', ''),
];
