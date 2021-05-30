<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBookCategoriesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jenis_buku' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'jenis_buku' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
		]);

		$this->forge->addPrimaryKey('id_jenis_buku');
		$this->forge->createTable('jenis_buku');
	}

	public function down()
	{
		$this->forge->dropTable('jenis_buku');
	}
}
