<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBookTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_buku' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'nama_buku' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'pengarang_buku' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'penerbit_buku' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'harga_buku' => [
				'type' => 'INT',
				'constraint' => 11,
			],
		]);

		$this->forge->addPrimaryKey('id_buku');
		$this->forge->createTable('buku');
	}

	public function down()
	{
		$this->forge->dropTable('buku');
	}
}
