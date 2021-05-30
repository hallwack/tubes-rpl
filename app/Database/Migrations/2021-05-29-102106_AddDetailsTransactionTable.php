<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDetailsTransactionTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_detail_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'banyak_pembelian' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'total_pembelian' => [
				'type' => 'INT',
				'constraint' => 11,
			],
		]);

		$this->forge->addPrimaryKey('id_detail_transaksi');
		$this->forge->createTable('detail_transaksi');
	}

	public function down()
	{
		$this->forge->dropTable('detail_transaksi');
	}
}
