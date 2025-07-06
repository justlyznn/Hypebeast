<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_blog'       => ['type' => 'INT', 'auto_increment' => true],
            'title'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'category'      => ['type' => 'VARCHAR', 'constraint' => 100],
            'author'        => ['type' => 'VARCHAR', 'constraint' => 100],
            'image'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'published_at'  => ['type' => 'DATE'],
            'hype_count'    => ['type' => 'VARCHAR', 'constraint' => 50],
            'content'       => ['type' => 'TEXT', 'null' => true,],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id_blog', true);
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
