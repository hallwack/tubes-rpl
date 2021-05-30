<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransactionTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'tanggal_transaksi' => [
				'type' => 'TIMESTAMP'
			],
			'total_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
			],
		]);

		$this->forge->addPrimaryKey('id_transaksi');
		$this->forge->createTable('transaksi');
	}

	public function down()
	{
		$this->forge->dropTable('transaksi');
	}
}
