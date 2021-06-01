<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTypeOfPaymentTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jenis_pembayaran' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'jenis_pembayaran' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			]
		]);

		$this->forge->addPrimaryKey('id_jenis_pembayaran');
		$this->forge->createTable('jenis_pembayaran');
	}

	public function down()
	{
		$this->forge->dropTable('jenis_pembayaran');
	}
}
