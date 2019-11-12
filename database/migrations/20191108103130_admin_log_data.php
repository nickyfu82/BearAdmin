<?php

use think\migration\Migrator;
use think\migration\db\Column;

class AdminLogData extends Migrator
{

    public function change()
    {
        $table = $this->table('admin_log_data', ['comment'=>'后台操作日志数据','engine' => 'InnoDB', 'encoding' => 'utf8mb4', 'collation' => 'utf8mb4_unicode_ci']);
        $table
            ->addColumn('admin_log_id', 'integer', ['limit' => 11, 'comment' => '日志ID'])
            ->addColumn('content', 'text', [ 'comment' => '日志内容'])
            ->addColumn('create_time', 'integer', ['limit' => 10, 'default' => 0, 'comment' => '创建时间'])
            ->addColumn('update_time', 'integer', ['limit' => 10, 'default' => 0, 'comment' => '更新时间'])
            ->addColumn('delete_time', 'integer', ['limit' => 10, 'default' => 0, 'comment' => '删除时间'])
            ->create();

    }
}
