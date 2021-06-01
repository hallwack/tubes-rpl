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
			'id_jenis_pembayaran' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'id_pelanggan' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
			],
			'tanggal_transaksi' => [
				'type' => 'DATETIME',
			],
			'total_transaksi' => [
				'type' => 'INT',
				'constraint' => 11,
			]
		]);

		$this->forge->addPrimaryKey('id_transaksi');
		$this->forge->addForeignKey('id_jenis_pembayaran', 'jenis_pembayaran', 'id_jenis_pembayaran', 'RESTRICT', 'RESTRICT');
		$this->forge->addForeignKey('id_pelanggan', 'pelanggan', 'id_pelanggan', 'RESTRICT', 'RESTRICT');
		$this->forge->createTable('transaksi');
	}

	public function down()
	{
		$this->forge->dropForeignKey('transaksi', 'id_jenis_pembayaran');
		$this->forge->dropForeignKey('transaksi', 'id_pelanggan');
		$this->forge->dropTable('transaksi');
	}
}
