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
			'id_jenis_buku' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
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
		$this->forge->addForeignKey('id_jenis_buku', 'jenis_buku', 'id_jenis_buku', 'RESTRICT', 'RESTRICT');
		$this->forge->createTable('buku');
	}

	public function down()
	{
		$this->forge->dropForeignKey('buku', 'id_jenis_buku');
		$this->forge->dropTable('buku');
	}
}
