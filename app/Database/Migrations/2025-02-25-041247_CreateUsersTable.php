<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_incerement' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('posts');
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
