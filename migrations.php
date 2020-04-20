<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/20
 * Time: 21:31
 */

return [
    'name' => 'My Project Migrations',
    'migrations_namespace' => 'MyProject\Migrations',
    'table_name' => 'doctrine_migration_versions',
    'column_name' => 'version',
    'column_length' => 14,
    'executed_at_column_name' => 'executed_at',
    'migrations_directory' => 'Migrations',
    'all_or_nothing' => true,
    'check_database_platform' => true,
];