<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCustomerTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pelanggan' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'nama_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'alamat_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'no_hp_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 14,
			],
			'username_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'password_pelanggan' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
		]);

		$this->forge->addPrimaryKey('id_pelanggan');
		$this->forge->createTable('pelanggan');
	}

	public function down()
	{
		$this->forge->dropTable('pelanggan');
	}
}
